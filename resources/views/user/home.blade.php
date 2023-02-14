<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.head')
</head>

<body>
    <!-- Topbar Start -->
    @include('user.nevbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{asset('user/img/carousel-1.jpg')}}"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                                style="letter-spacing: 3px;">Elegance Salon Booking</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Massage and Body relex</h3>
                            <p class="mx-md-5 px-5">Book your Appointment quickly and fast....</p>
                            @if(Route::has('login'))
                            @auth
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                                href="/service">Make Appointment</a>
                                @endauth
                                @endif
                        </div>
                    </div>
                </div>

                <!-- Test -->
               

                <!-- test -->
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{asset('user/img/carousel-2.jpg')}}"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                                style="letter-spacing: 3px;">Elegance Salon Booking</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
                            <p class="mx-md-5 px-5">Clear face & Bright Face with special product and proper teatments</p>
                                @if(Route::has('login'))
                            @auth
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                                href="/service">Make Appointment</a>
                                @endauth
                                @endif
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{asset('user/img/carousel-3.jpg')}}"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                                style="letter-spacing: 3px;">Elegance Salon Booking</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Body Treatment</h3>
                            <p class="mx-md-5 px-5">Do a body massage with our exparts </p>
                            @if(Route::has('login'))
                            @auth
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                                href="/service">Make Appointment</a>
                                @endauth
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="{{asset('user/img/beard1.jpg')}}" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">We Do</h6>
                    <h1 class="mb-4">Man's Beard Treatment.. </h1>
                    <p class="pl-4 border-left border-primary">Give your Littel time and Book you Slot.. <br> We will try our best service ... </p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                <h6 class="text-uppercase">Spa Specialist</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
                                <h6 class="text-uppercase">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- @if(Route::has('login'))
     @auth
                            
                               
 
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">Make Appointment</h1>
                   
                    <form action="{{url('user_appointment')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent p-4" name="name"
                                        placeholder="Your Name" required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent p-4" name="email"
                                        placeholder="Your Email" required="required" />
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="phone" class="form-control bg-transparent p-4" name="phone"
                                        placeholder="Your Phone" required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-transparent px-4" name="service"
                                        style="height: 47px;">
                                        @foreach ($appointment as $appointment)
                                        <option>{{$appointment->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent p-4" name="message"
                                        placeholder="Type your Message" />
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="date" class="form-control bg-transparent p-4 datetimepicker-input"
                                            name="date" placeholder="Select Date" data-target="#date"
                                            data-toggle="datetimepicker" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="time" class="form-control bg-transparent p-4 datetimepicker-input"
                                            name="time" placeholder="Select Time" data-target="#time"
                                            data-toggle="datetimepicker" required="required"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12">
                                <button class="btn btn-primary btn-block" type="submit" value="submit"
                                    style="height: 47px;">Make Appointment</button>
                            </div>
                        </div>

                    </form>
             
                </div>
            </div>
        </div>
    </div>
  
    @endauth
    @endif -->


    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('user/img/opening.jpg')}}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                        <h1 class="mb-4">Best Facial Zone</h1>
                        <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore
                            sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et
                            erat sed diam duo</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon – Fri : 9:00 AM -
                                7:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 9:00 AM - 6:00
                                PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sunday : Closed</li>
                        </ul>
                        @if(Route::has('login'))
                        @auth
                        <a href="/service" class="btn btn-primary mt-2">Book Now</a>
                        @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Salon Specialist</h6>
                    <h1 class="mb-5">Our Team</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{asset('user/img/team-1.jpg')}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{asset('user/img/team-2.jpg')}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Cory Brown</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{asset('user/img/team-3.jpg')}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{asset('user/img/team-5.jpg')}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Rakesh </h5>
                                <p class="m-0">Beard Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <


    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer Start -->

</body>

</html>