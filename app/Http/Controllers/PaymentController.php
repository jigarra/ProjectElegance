<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Appointment;
use App\Models\Service;
use App\Models\payment;
use App\Models\approve;
use App\Models\cancle;
use Razorpay\Api\Api;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //acvtive key

     // rzp_live_G5nKaEceMrvqdY

    // w5SHsQLbylmvs1HAbHBROgOl

    //test key

    // rzp_test_Gax5O7bC7BwDUd

    // hgSfQTYHoVYsBMinUNvlS9j9
    public $api;

    public function __construct($foo = null) 
    {
        $this->api = new Api("rzp_test_Gax5O7bC7BwDUd","hgSfQTYHoVYsBMinUNvlS9j9");
    }

    public function successpage()
    {
        return view('user.paymentsuccess');
    }

    public function success(Request $request)
    {
        
        $status =$this->api->payment->fetch($request->get('payment_id'));
        //dd($status);
        $user=payment::where('razorpay_id',$status->order_id)->first();
        $user->payment_done = true;
        $user->payment_id=$status->id;
        $user->save();
       

        return redirect('myappointment_user');

    }

    public function UserPayment(Request $request, $id)
    {
        
        $service=service::find($id);
        $data=appointment::find($id);
        
        $data =new Appointment;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->status='in progress';
        $data->service=$service->title;
        $data->service_id=$service->id;
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        $data->name=Auth::user()->name; 
        $data->email=Auth::user()->email;
        $data->phone=Auth::user()->phone;
        }
         
        
            $orderData=[
            'receipt'   =>'rcpid_11',
            'amount'    => ($service->price * 100),
            'currency'  =>'INR'
        ];
        $razorpayOrder = $this->api->order->create($orderData);

        $data->amount=$razorpayOrder->amount;
        $data->save();
        //dd($data->id);
        $payment =new payment;
        $payment->amount=$razorpayOrder->amount;
        $payment->service_id=$service->id;
        $payment->ServiceName=$service->title;
        $payment->date=$data->date;
        $payment->time=$data->time;
        $payment->razorpay_id=$razorpayOrder->id;
        $payment->payment_id='cash';
        $payment->appointment_id=$data->id;
        $payment->user_id=Auth::user()->id;
        $payment->save();
      
        //dd($razorpayOrder);
       
        //return view('user.payment',compact('razorpayOrder','payment','service'));
        return view('user.payment',compact('service','payment','razorpayOrder','data'));

    }

    public function Admincheck($appointment_id)
    {
        $check=payment::where('appointment_id',$appointment_id)->first();
        $appoint=approve::where('appointment_id',$appointment_id)->first();
        $service=service::where('id',$check->service_id)->first();
        return view('admin.check',compact('check','appoint','service'));
    }

    public function Admininvoice($appointment_id)
    {
        $check=payment::where('appointment_id',$appointment_id)->first();
        $appoint=approve::where('appointment_id',$appointment_id)->first();
        $service=service::where('id',$check->service_id)->first();
        $todayDate =Carbon::today();
        $data=['check' => $check,'appoint' => $appoint,'service' => $service ,'todayeDate'=>$todayDate];
        $pdf = Pdf::loadView('report.invoice',$data)->setOptions(['defaultFont' => 'sans-serif']);

       
        return $pdf->download('invoice'.$appoint->appointment_id.'-'.$todayDate.'.pdf');
    }

    public function Adminpayment()
    {
        $payment=payment::all();
        return view('admin.payment',compact('payment'));
    }
}


