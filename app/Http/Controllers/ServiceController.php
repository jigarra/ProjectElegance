<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\payment;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;


class ServiceController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('user.service');
            }
        }
    }
    public function index()
    {
        return view('user.service');
    }


    public function show()
    {
        $service = service::all();
        return view('user.service',compact('service'));
    }

    public function addservice()
    {
        $service = service::all();
        return view('admin.service',compact('service'));
        
    }
    
    public function upload(Request $request )
    {
        $service=new service;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->image->move('addservicesimage',$imagename);
        $service->image=$imagename;

        $service->discription=$request->discription;
        $service->title=$request->title; 
        $service->price=$request->price;
        $service->save();

        return redirect()->back()->with('message','Service Added Successsfully');
    }

    public function delete_service($id)
    {
        $data=service::find($id);
        
        $data->delete();
        return redirect()->back();
    }

    public function update_service($id)
    {
        $data = service::find($id);
        return view('admin.updateservice',compact('data'));

    }
    
    public function edit_service(Request $request ,$id)
    {
        $service=service::find($id);
        $service->title=$request->title;
        $service->discription=$request->discription;
        $service->price=$request->price;
        $image=$request->image;

        if($image)
        {
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->image->move('addservicesimage',$imagename);

        
        $service->image=$imagename;
        }
        $service->save();
        return redirect()->back()->with('message','Service Updated Successfully ....!');
    }

    public function show_packge($id)
    {

        $data=appointment::all();
        $service = service::find($id);
    
        return view('user.package',compact('service','data'));

    }

    public function search(Request $request)
    {
        $search= $request->search;
        $service=service::where('title','Like','%'.$search.'%')->get();

        return view('user.service',compact('service'));
    }

}

