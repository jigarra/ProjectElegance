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

    <li class="nav-item">
        <a class="nav-link" href="/admin_payment">
            <i class="fas fa-fw fa-book"></i>
            <span>Payments</span></a>
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

    <li class="nav-item">
        <a class="nav-link" href="/admin_newsletter">
            <i class="fas fa-fw fa-table"></i>
            <span>News Letter </span></a>
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