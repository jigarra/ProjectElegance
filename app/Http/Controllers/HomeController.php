<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $appointment = service::all();
                return view('user.home',compact('appointment'));  
                //return view('user.home');
            }
            if(Auth::user()->usertype=='3')
            {
                $data=user::all();
                return view('admin.home',compact('data'));
                //return view('user.home');
            }
            else
            {
                $data=user::all();
                return view('admin.home',compact('data'));
            }

        }
    }
    public function index()
    {
        if(Auth::id())
        {
            
            return redirect('home');
        }
        else
        {
            $appointment = service::all();
            return view('user.home',compact('appointment'));   
            //return view('user.home');
        }
    }
    
    public function about_index()
    {
        return view('user.about');
    }

    public function contact_index()
    {
        return view('user.contact');
    }
}
