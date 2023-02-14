<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.head')
</head>

<body>
    <!-- Topbar Start -->
    @include('user.nevbar')
    <!-- Navbar End -->
<h1>Test git </h1>

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Services</h3>
            <div class="d-inline-flex align-items-center text-white">
            <form action="{{url('search')}}" class="d-none d-sm-inline-block form-inline mr-auto align-center  ml-md-3 my-2 my-md-3 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search Service Here..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <input type="submit" value="Search" class="btn btn-outline-primary" type="button">
        </div>
    </div>
</form>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            
            <div class="row justify-content-center text-center">
                
                <div class="col-lg-6">
                    
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Best Services</h6>
                    <h1 class="mb-5">Services</h1>
                </div>
            </div>
            <div class="row">

            @foreach ($service as $service)
            <div class="col-lg-3 col-md-6">
                <div class="team position-relative overflow-hidden mb-5">
                    <img class="img-fluid" height="300px" src="addservicesimage/{{$service->image}}" alt="">
                    <div class="position-relative text-center">
                        <div class="team-text bg-primary text-white">
                            <h5 class="text-white text-uppercase">{{$service->title}}</h5>
                            <p class="m-0"> &#8377; {{$service->price}}</p>
                        </div>
                        <div class="team-social bg-dark text-center">
                        @if(Route::has('login'))
                            @auth
                            <a class="btn btn-primary" href="{{url('service-package',$service->id)}}">Select Package</a>
                        @else
                          <a class="btn btn-primary" href="{{url('service-package',$service->id)}}">Select Package</a>
           
                         @endauth
                        @endif
                        <!-- {{route('register')}} -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            </div>
        </div>
    </div>
    <!-- Service End -->


    


    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer Start -->
    
</body>
</html>