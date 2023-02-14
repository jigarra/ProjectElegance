<?php

namespace App\Http\Controllers;

use Razorpay\Api\Api;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\payment;
use App\Models\User;
use App\Models\approve;
use App\Models\cancle;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Notification;

use App\Notifications\SendAproveMail;
use App\Notifications\SendCancleMail;

use Illuminate\Support\Facades\Auth;


class AppoinmentController extends Controller
{
    public $api;

    public function __construct($foo = null) 
    {
        $this->api = new Api("rzp_test_Gax5O7bC7BwDUd","hgSfQTYHoVYsBMinUNvlS9j9");
    }

    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $appointment = service::all();
                return view('user.appointment',compact('appointment'));
            }
        }
    }
    public function index()
    {
        $appointment = service::all();
        return view('user.appointment',compact('appointment'));
    }

    public function appointment(Request $request ,$id)
    {   
        $validatedDate = $request->validate([
            'time' => 'required',
            'date' => 'required',
        ]);
        $service = service::find($id);

        //$orderprice=$service->price;
        // $orderData=[
        //     'receipt'   =>'rcpid_11',
        //     'amount'    => ($service->price * 100),
        //     'currency'  =>'INR', 
            
        // ];

        //$razorpayOrder = $this->api->order->create($orderData);
        //dd($razorpayOrder);

        
        $data =new Appointment;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->status='in progress';
        $data->service=$service->title;
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        $data->name=Auth::user()->name; 
        $data->email=Auth::user()->email;
        $data->phone=Auth::user()->phone;
        }
         
        $data->save();
        //$payment->save();

        //return view('user.package',compact('razorpayOrder','payment','service'));        
        //return redirect()->back()->with('message','Appointment is successfull will contact with you soon....!');
        return redirect('user.payment');
    }


    public function myappointment()
    {
       
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();  
            $approve=approve::where('user_id',$userid)->get();  
            
            return view('user.myappointment',compact('appoint','approve'));
        }
        else
        {
            return redirect()->back();
        }
       
    }

    public function userdata($id)
    {
            
            $userdata=approve::where('user_id',$id)->get();
            return view('admin.userdata',compact('userdata'));
    }



    //Admin Apponintment

    public function admin_appointment()
    {
        $data=appointment::orderBy('id','desc')->paginate(5);
        return view('admin.appointment',compact('data'));
    }

    //approve appointments

    public function admin_approved(Request $request, $id)
    {
        $data_approve=appointment::find($id);
        $data_approve->status='approved';
        $approve=new approve;
        $approve->name=$data_approve->name;
        $approve->email=$data_approve->email;
        $approve->phone=$data_approve->phone;
        $approve->service=$data_approve->service;
        $approve->amount=$data_approve->amount;
        $approve->date=$data_approve->date;
        $approve->time=$data_approve->time;
        $approve->status=$data_approve->status;
        $approve->user_id=$data_approve->user_id;
        $approve->appointment_id=$data_approve->id;
        // Notification::send($data_approve,new
        //     SendAproveMail());
        $data_approve->save();
        $approve->save();

        $delete=appointment::where('id',$id)->first();
        $delete->delete();


        return redirect()->back()->with('message','Appointment is successfully approved');

    }


    //show data in approved table

    public function approve()
    {
        $approve=approve::all();
        return view('admin.approve',compact('approve'));
    }

    public function searchdate(Request $request)
    {
        //dd($request);
        $date=$request->date;
       
        $approve=approve::where('date','Like','%'.$date.'%')->get();
        return view('admin.approve',compact('approve'));
    }


    //Generate Report

    public function approvereport()
    {
        $approve=approve::all();
        $todayDate =Carbon::today();
        $data=['approve' => $approve,'todayeDate'=>$todayDate];
        $pdf = Pdf::loadView('report.approvereport',$data)->setOptions(['defaultFont' => 'sans-serif']);
        //return view('report.approvereport',compact('approve'));
        return $pdf->download('invoice-'.$todayDate.'.pdf');
    }

    //admin cancle appointment

    public function admin_cancle($id)
    {
        $data_cancle=appointment::find($id);
        $data_cancle->status='Cancle';
        $cancle=new cancle;
        $cancle->name=$data_cancle->name;
        $cancle->email=$data_cancle->email;
        $cancle->phone=$data_cancle->phone;
        $cancle->service=$data_cancle->service;
        $cancle->amount=$data_cancle->amount;
        $cancle->date=$data_cancle->date;
        $cancle->time=$data_cancle->time;
        $cancle->status=$data_cancle->status;
        $cancle->user_id=$data_cancle->user_id;
        $cancle->appointment_id=$data_cancle->id;
        Notification::send($data_cancle,new
            SendCancleMail());
        $data_cancle->save();
        $cancle->save();

        $delete=appointment::where('id',$id)->first();
        $delete->delete();
        return redirect()->back()->with('message','Appointment is successfully cancled');
    }

    public function cancle()
    {
        $cancle=cancle::all();
        return view('admin.cancle',compact('cancle'));
    }

   

    public function admin_approved_cancle($appointment_id)
    {
       
        $data_cancle=approve::where('appointment_id',$appointment_id)->first();
       
        $data_cancle->status='Cancle';
       
        //dd($data_cancle);
        
        $cancle=new cancle;
        $cancle->name=$data_cancle->name;
        $cancle->email=$data_cancle->email;
        $cancle->phone=$data_cancle->phone;
        $cancle->service=$data_cancle->service;
        $cancle->amount=$data_cancle->amount;
        $cancle->date=$data_cancle->date;
        $cancle->time=$data_cancle->time;
        $cancle->status=$data_cancle->status;
        $cancle->user_id=$data_cancle->user_id;
        $cancle->appointment_id=$data_cancle->appointment_id;
        Notification::send($data_cancle,new
        SendCancleMail());
        $data_cancle->save();
        $cancle->save();


        $delete=approve::where('appointment_id',$appointment_id)->first();
        $delete->delete();


        
       
        return redirect()->back()->with('message','Appointment is successfully cancled');
    }

    
}
