<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\SubscribController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table', function () {
    return view('admin.tables');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

// Add New Admin

Route::get('/show_admin',[AdminController::class,'ShowAdmin']);

Route::get('/show_admindata/{id}',[AdminController::class,'edit']);

Route::put('update_admin/{id}',[AdminController::class,'update_admin']);

//Services Part

Route::get('/service',[ServiceController::class,'show']);

Route::get('/search',[ServiceController::class,'search']);

Route::get('/service-package/{id}',[ServiceController::class,'show_packge']);

Route::get('/userdata/{id}',[AppoinmentController::class,'userdata']);

//paymentcontroller

Route::match(['get','post'],'/user_payment/{id}',[PaymentController::class,'UserPayment']);
Route::match(['get','post'],'/paymentdone',[PaymentController::class,'success']);

Route::get('/admin_payment',[PaymentController::class,'Adminpayment']);

Route::get('/admin_check/{appointment_id}',[PaymentController::class,'Admincheck']);


//Report & invoice parts 

Route::get('/admin_invoice/{appointment_id}/generate',[PaymentController::class,'Admininvoice']);

Route::get('/approvereport',[AppoinmentController::class,'approvereport']);



//service 
Route::get('/admin_add_service',[ServiceController::class,'addservice']);

Route::post('/admin_upload_service',[ServiceController::class,'upload']);

Route::get('/delete_service/{id}',[ServiceController::class,'delete_service']);

Route::get('/update_service/{id}',[ServiceController::class,'update_service']);

Route::post('/admin_edit_service/{id}',[ServiceController::class,'edit_service']);

//Appointment Parts
Route::get('/appoinment',[AppoinmentController::class,'index']);

Route::post('/searchdate',[AppoinmentController::class,'searchdate']);


Route::post('/user_appointment/{id}',[AppoinmentController::class,'appointment']);

Route::get('/myappointment_user',[AppoinmentController::class,'myappointment']);

Route::get('/cancle_appointment_user/{id}',[AppoinmentController::class,'cancle_appointment']);

Route::get('/admin_appointment',[AppoinmentController::class,'admin_appointment']);

Route::get('/admin_appointment_approved/{id}',[AppoinmentController::class,'admin_approved']);

Route::get('/admin_appointment_approve',[AppoinmentController::class,'approve']);

Route::get('/admin_appointment_cancle/{id}',[AppoinmentController::class,'admin_cancle']);


Route::get('/admin_appointment_approved_cancle/{appointment_id}',[AppoinmentController::class,'admin_approved_cancle']);

Route::get('/admin_appointment_cancle',[AppoinmentController::class,'cancle']);




//subscribe parts

Route::post('/admin_subscribe',[SubscribController::class,'index']);

Route::post('/newsletter',[SubscribController::class,'NewsLetter']);

Route::get('/admin_newsletter',[SubscribController::class,'AdminNewsLetter']);

Route::post('/user_subscribe',[SubscribController::class,'subscribe']);


Route::get('/admin_subscribe',[SubscribController::class,'admin_subscribe']);

//About 

Route::get('/about',[HomeController::class,'about_index']);

Route::get('/contact',[HomeController::class,'contact_index']);

//Email 


Route::get('/admin_email_view/{id}',[EmailController::class,'email_view']);

Route::post('/sendemail/{id}',[EmailController::class,'sendemail']);

Route::post('/Approve_sendemail/{id}',[EmailController::class,'Approve_sendemail']);