<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.navbar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Appointment </h1>
                        
                    </div>
                    @if(session()->has('message'))
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                     {{session()->get('message')}}   
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                      @endif
                    <!-- Content Row -->
                    <div class="row">

                       

                <!-- Data tablee Start -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>User ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Service</th>
                                            <th>Time</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Approve</th>
                                            <th>Cancle</th>
                                            <th>Send Email</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $appoint)
                                        <tr>
                                            <td>{{$appoint->user_id}}</td> 
                                            <td>{{$appoint->name}}</td>
                                            <td>{{$appoint->email}}</td>
                                            <td>{{$appoint->phone}}</td>
                                            <td>{{$appoint->service}}</td>
                                            <td>{{$appoint->time}}</td>
                                            <td>{{$appoint->date}} </td>
                                            <td>{{$appoint->status}}</td>
                                            
                                            <td><a type="button" href="{{url('admin_appointment_approved', $appoint->id)}}" class="btn btn-outline-success" id="approve_btn">Approve</a></td>
                                            <td><a type="button" href="{{url('admin_appointment_cancle', $appoint->id)}}" class="btn btn-outline-danger") >Cancle</a></td>
                                            <td><a type="button" href="{{url('admin_email_view', $appoint->id)}}" class="btn btn-outline-primary">Email</a></td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Data Table -->
            </div>
</div>
</div>

</body>

</html>