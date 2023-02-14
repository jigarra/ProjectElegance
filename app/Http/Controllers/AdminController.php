<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;




class AdminController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='3')
            {
                $data=user::orderBy('created_at','DESC')->get();
                return view('admin.home',compact('data'));
                //return view('user.home'); 
            }
        }
    }

    public function ShowAdmin()
    {
        $data=user::all();
        return view('admin.ShowAdmin',compact('data'));   
    }

    public function edit($id)
    {
        $user = user::find($id);
        return view('admin.editAdmin',compact('user'));   
    }


    public function update_admin(Request $request ,$id)
    {
        $user=user::find($id);
        if($user)
        {
            $user->usertype = $request->usertype;
            $user->update();
            return redirect()->back()->with('message','Admin Added Successsfully');
        }
        return redirect()->back()->with('message','Admin not added....');
    }
}