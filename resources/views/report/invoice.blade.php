<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <title>Elegance Invoice</title>
</head>

<style>
        .body-main {
        background: #ffffff;
        border-bottom: 15px solid #1E1F23;
        border-top: 15px solid #1E1F23;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 40px 30px !important;
        position: relative ;
        box-shadow: 0 1px 21px #808080;
        font-size:10px;
   
    }

    .main thead {
		background: #1E1F23;
        color: #fff;
		}
    .img{
        height: 100px;}
    h1{
       text-align: center;
    }

    
</style>
<body>
<div class="container">

<div class="page-header">
    <h1>Elegance Salon </h1>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 body-main">
            <div class="col-md-12">
               <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8 text-right">
                        <h4 style="color: #F81D2D;"><strong>Elegance Salon</strong></h4>
                        <p>Ahmedabad Gujarat-380015</p>
                        <p>82381141237</p>
                        <p>eleganceinfo@gamil.com</p>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>INVOICE</h2>
                        <h5>{{$check->razorpay_id}}</h5>
                    </div>
                </div>
                <br />
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th><h5>Information</h5></th>
                                <th><h5>Details</h5></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-9">User ID</td>
                                <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i>{{$check->user_id}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-9"> Appointment ID</td>
                                <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> {{$check->appointment_id}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-9">User Name</td>
                                <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i>{{$appoint->name}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-9">Service name</td>
                                <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i>{{$appoint->service}} </td>
                            </tr>

                            <tr>
                                <td class="col-md-9">Appointment Date & time</td>
                                <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i>{{$appoint->date}}  /  {{$appoint->time}}</td>
                            </tr>

                            <tr>
                                <td class="col-md-9">Appointment Status</td>
                                <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i>{{$appoint->status}}</td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-9">Payment Status</td>
                                <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i>{{$check->payment_done}}</td>
                            </tr>

                            <tr>
                                <td class="col-md-9">Payment ID</td>
                                <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i>{{$check->payment_id}}</td>
                            </tr>
                            
                            <tr style="color: #F81D2D;">
                                <td class="text-right"><h4><strong>Service Amount :</strong></h4></td>
                                <td class="text-left"><h4><strong><i class="fas fa-rupee-sign" area-hidden="true"></i>{{$check->amount/100}}</strong></h4></td>
                            </tr>

                           
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="col-md-12">
                        <p><b>Date :</b> {{$todayeDate}}</p>
                        <br />
                        <p><b>Elegance Salon</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>