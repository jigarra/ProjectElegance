<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.head')
</head>

<body>
    <!-- Topbar Start -->
    @include('user.nevbar')
    <!-- Navbar End -->

    @if(session()->has('message'))

    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{session()->get('message')}}
    </div>
    @endif
    
<!-- About Start -->
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="/addservicesimage/{{$service->image}}" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Package Details</Details></h6>
                   
                   
                    <form action="{{url('user_payment',$service->id)}}" class="needs-validation" method="post">
                            @csrf
                    <h1 class="mb-4" value="{{$service->title}}">{{$service->title}} </h1>
                    <p class="pl-4 border-left border-primary" value="{{$service->discription}}">{{$service->discription}}</p>
                  
                        
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h6 class="text-uppercase" >Package Charge</h6>
                                <h3 class=" display-4 text-primary"  value="{{$service->price}}"> &#8377; {{$service->price}}</h3>
                                
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="form-group">
                            <div class="bg-light text-center p-4">
                                <h6 class="text-uppercase">Select Date</h6>
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" name="date" class="form-control bg-transparent p-4 mt-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>                                   
                                </div>
                                @error('date')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="bg-light text-center p-4">
                                    <h6 class="text-uppercase">Select Time</h6>  

                                    <select class="form-control bg-transparent" id="time" name="time" required>
                                        <option value="">Choose...</option>
                                        <option value="09:00 AM to 09:30 AM" >09:00 AM to 09:30 AM</option>
                                        <option value="10:00 AM to 10:30 AM" >10:00 AM to 10:30 AM</option>
                                        <option value="11:00 AM to 11:30 AM" >11:00 AM to 11:30 AM</option>
                                        <option value="11:30 AM to 12:00 AM" >11:30 AM to 12:00 AM</option>
                                        <option value="12:00 AM to 12:30 AM" >12:00 AM to 12:30 AM</option>
                                        <option value="01:30 PM to 02:00 PM" >01:30 PM to 02:00 PM</option>
                                        <option value="02:30 PM to 03:00 PM" >02:30 PM to 03:00 PM</option>
                                        <option value="03:00 PM to 03:30 PM" >03:00 PM to 03:30 PM</option>
                                        <option value="03:30 PM to 04:00 PM" >03:30 PM to 04:00 PM</option>
                                        <option value="04:00 PM to 04:30 PM" >04:00 PM to 04:30 PM</option>
                                        <option value="04:30 PM to 05:00 PM" >04:30 PM to 05:00 PM</option>
                                        <option value="05:30 PM to 06:30 PM" >05:30 PM to 06:30 PM</option>
                                        <option value="06:30 PM to 07:00 PM" >06:30 PM to 07:00 PM</option>
                                        <option value="07:00 PM to 07:30 PM" >07:00 PM to 07:30 PM</option>
                                    </select> 
                                   @error('time')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                                    </div>        
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                        @if(Route::has('login'))
                        @auth
                                    <button class="btn btn-primary btn-block"  type="submit" value="submit"
                                        style="height: 47px;">Make Appointment</button>                
                        
                        @else
                        <a href="{{route('register')}}" class="btn btn-primary btn-block" style="height: 47px;">Make Appointment</a>       
                        
                                        @endauth
                                        @endif       
                         
                        </div>
                        <!-- id="rzp-button1" -->
                    </div>                 
                    </form>
                </div>               
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer Start -->

</body>

</html>