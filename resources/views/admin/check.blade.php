<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elegance Admin- Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        @if(Auth::id())
    @if(Auth::user()->usertype=='3')
    <!-- Nav Item - Charts -->
    <div class="sidebar-brand-text mx-3">Elegance Super Admin</div>
   @else
        <div class="sidebar-brand-text mx-3">Elegance Admin</div>
        @endif
    @endif
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    
    

    <!-- Divider -->
    <hr class="sidebar-divider">
    @if(Auth::id())
    @if(Auth::user()->usertype=='3')
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/show_admin">
            <i class="fas fa-fw fa-book"></i>
            <span>Admin</span></a>
    </li>
    @endif
    @endif

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/admin_appointment">
            <i class="fas fa-fw fa-book"></i>
            <span>Appointments</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/admin_appointment_approve">
            <i class="fas fa-fw fa-book"></i>
            <span>Approved Appointments</span></a>
    </li>

    

    <li class="nav-item">
        <a class="nav-link" href="/admin_appointment_cancle">
            <i class="fas fa-fw fa-book"></i>
            <span>cancled Appointments</span></a>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/admin_add_service">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Service</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/admin_subscribe">
            <i class="fas fa-fw fa-table"></i>
            <span>Contact Inquery</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="/table">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        
    </li>
    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
   
    <x-app-layout></x-app-layout>

</ul>

</nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Payment & Appointment</h1>
                        
                        <a href="/admin_appointment_approve" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i>&nbsp Back &nbsp</a>
                        
                    </div>
                    @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                        {{session()->get('message')}}
                    </div>
                    @endif
                    <!-- Content Row -->
                    <div class="row">



                        <!-- Data tablee Start -->
                        <div class="container-fluid">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">{{$appoint->name}}<br> User ID : {{$check->user_id}} </h6>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <p> User ID : <span class="text-danger">{{$check->user_id}}</span></p>
                                                <p> Appointment ID : <span class="text-danger">{{$check->appointment_id}}</span></p>
                                                <p> User Name : <span class="text-success">{{$appoint->name}} </span></p>
                                                <p> Service name : <span class="text-danger">{{$appoint->service}}</span></p>
                                                <p> Service Amount : <span class="text-danger">{{$check->amount/100}}</span></p>
                                                <p> Appointment Status : <span class="text-success">{{$appoint->status}}</span></p>
                                            </div>
                                            <div class="col-sm">
                                                <p> Payment Status : <span class="text-warning">{{$check->payment_done}}</span></p>
                                                <p> Payment ID : <span class="text-info">{{$check->payment_id}}</span></p>
                                                <p> Order ID : <span class="text-info">{{$check->razorpay_id}}</span></p>
                                                <p> User E-MAIL : <span class="text-success">{{$appoint->email}}</span></p>
                                                <p>User Phone : <span class="text-success">{{$appoint->phone}}</span></p><br>
                                            </div>
                                            <!-- <div class="col-sm">
                                                <img src="{{ public_path('$service->image') }}"class="rounded  h-50 w-30"></p>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- src="/addservicesimage/{{$service->image}}" -->






                                </div>
                                <a href="{{url('admin_invoice/'.$appoint->appointment_id.'/generate')}}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp Generate Invoice &nbsp</a>
                       
                            </div>
                        </div>
                        <!-- End Data Table -->
                    </div>
                </div>
            </div>



</body>

</html>