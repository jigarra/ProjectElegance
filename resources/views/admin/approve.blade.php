<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.head')

</head>
<style>
    input[type="date"].form-control,
input[type="time"].form-control,
input[type="datetime-local"].form-control,
input[type="month"].form-control {
  appearance: none;
}

    </style>
<body id="page-top">
<script>
     $('#date').datetimepicker({
        defaultDate : new Date(),
        minDate : Date(),
        format: 'L'
    });
   
    </script>

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
                        <h1 class="h3 mb-0 text-gray-800">Approved Appointment </h1>
                        <a href="/approvereport" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp Generate report &nbsp</a>
                        
                        <form action="{{url('/searchdate')}}" method="post">
                        
                        <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" name="date" class="form-control bg-transparent p-4 mt-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>                                   
                                </div>
                        <input type="submit" value="search" class="btn btn-info">

                        </form>
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
                            <h6 class="m-0 font-weight-bold text-primary">Appoiments Approved</h6>
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
                                            
                                            <th>Date-Time</th>
                                            <th>Status</th>
                                            <th>Check Details</th>
                                            <th>Cancle</th>
                                            <th>Send Email</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($approve as $appoint)
                                        <tr>
                                            <td>{{$appoint->user_id}}</td> 
                                            <td>{{$appoint->name}}</td>
                                            <td>{{$appoint->email}}</td>
                                            <td>{{$appoint->phone}}</td>
                                            <td>{{$appoint->service}}</td>
                                            
                                            <td>{{$appoint->date}}<br> {{$appoint->time}} </td>
                                            <td>{{$appoint->status}}</td>
                                            <td><a type="button" href="{{url('admin_check', $appoint->appointment_id)}}" class="btn btn-outline-info">Check</a></td>
                                            <td><a type="button" href="{{url('admin_appointment_approved_cancle', $appoint->appointment_id)}}" class="btn btn-outline-danger">Cancle</a></td>
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