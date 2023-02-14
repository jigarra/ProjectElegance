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
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">My Appointments</h3>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="/">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">My Appointment</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Open Hours Start -->

    <div class="container">
        <div class="col-lg-12">
            <div class="hours-text bg-light p-4 ml-4 p-lg-5 my-lg-5">
                <h6 class="text-white text-uppercase bg-primary py-1 px-2 mb-3 text-center">Appoinment</h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Service</th>
                            <th scope="col">Date/Time</th>
                            <th scope="col">Status</th>
                            <th scope="col">Price</th>
                            <th scope="col">Cancle <br>Appointment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($appoint as $appoints)
                        <tr>
                            <th scope="row">{{$appoints->service}}</th>
                            <td>{{$appoints->date}}<br>{{$appoints->time}}</td>
                            <td>{{$appoints->status}}</td>
                            <td>{{$appoints->amount/100}}</td>
                            <td><a type="button" href="{{url('admin_appointment_cancle', $appoints->id)}}" class="btn btn-outline-danger") >Cancle</a></td>
                        </tr>
                        @endforeach

                        
                        @foreach($approve as $appoints)
                        <tr>
                            <th scope="row">{{$appoints->service}}</th>
                            <td>{{$appoints->date}}<br>{{$appoints->time}}</td>
                            <td>{{$appoints->status}}</td>
                            <td>{{$appoints->amount/100}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- Open Hours End -->


    <!-- Footer Start -->
    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer Start -->

</body>

</html>