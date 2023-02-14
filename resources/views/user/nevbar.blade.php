<div class="container-fluid bg-light d-none d-lg-block">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <small><i class="fa fa-phone-alt mr-2"></i>+91 823811412</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>eleganceinfo@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-primary px-2">
                    <i class="fab fa-instagram" onclick="window.open('https://www.instagram.com/jigarra_/')"></i>
                </a>
                <a class="text-primary pl-2">
                    <i class="fa fa-globe" aria-hidden="true" onclick="window.open('http://mjcreator.jimdosite.com/')"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-primary"><span class="text-dark">Eleg</span>ance</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/service" class="nav-item nav-link">Services</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            @if(Route::has('login'))
            @auth
           
                <a href="/myappointment_user" class="btn btn-primary d-none d-lg-block mr-2">My Appointment</a>
               <x-app-layout></x-app-layout>
            
            
            @else
           
            <a href="{{route('login')}}" class="btn btn-primary d-none d-lg-block mr-2">Login</a>
            <a href="{{route('register')}}" class="btn btn-primary d-none d-lg-block">Register</a>
            
            @endauth
            @endif
            
        </div>
    </nav>
</div>