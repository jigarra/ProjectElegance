<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;
use Notification;

use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Auth;


class EmailController extends Controller
{
    public function email_view($id)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                $data=appointment::find($id);
                return view('admin.emailview',compact('data'));
            }
        }
    }
    public function sendemail(Request $request,$id)
    {
        $data = appointment::find($id);

        $details =[
            'greeting' => $request->greeting,

            'body' => $request->body,

            'actiontext' => $request->actiontext,

            'actionurl' => $request->actionurl,

            'endpart' => $request->endpart
        ];

        Notification::send($data,new
            SendEmailNotification($details));

        return redirect()->back();

    }

    public function Approve_sendemail(Request $request,$id)
    {
        $data = appointment::find($id);
        
        Notification::send($data,new
            SendEmailNotification($details));

        return redirect()->back();

    }
}
