<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\subscrib;
use App\Models\newsletter;
use Illuminate\Support\Facades\Auth;



class SubscribController extends Controller
{
    public function admin_subscribe()
    {
        $data=subscrib::orderBy('id','desc')->paginate(5);
        return view('admin.subscrib',compact('data'));
    }
    public function index()
    {
        $subscrib = subscrib::all();
        return view('admin.contect',compact('subscrib'));
    }

    public function subscribe(Request $request)
    {
        $data =new subscrib;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->save();
        return redirect()->back()->with('message','Subscribe is successfull will contact with you soon....!');
    }

    public function NewsLetter(Request $request)
    {
        $newsletter=new newsletter;
        $newsletter->email=$request->email;
        $newsletter->save();
        return redirect()->back();
    }

    public function AdminNewsLetter()
    {
        $userdata=newsletter::all();
        return view('admin.newsletter',compact('userdata'));
    }
}
