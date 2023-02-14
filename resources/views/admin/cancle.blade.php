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
                        <h1 class="h3 mb-0 text-gray-800">Cancled Appointment </h1>
                        
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
                            <h6 class="m-0 font-weight-bold text-primary">Appoiments Cancled</h6>
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
                                            <!-- <th>Send Email</th> -->
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cancle as $appoint)
                                        <tr>
                                            <td>{{$appoint->user_id}}</td> 
                                            <td>{{$appoint->name}}</td>
                                            <td>{{$appoint->email}}</td>
                                            <td>{{$appoint->phone}}</td>
                                            <td>{{$appoint->service}}</td>
                                            <td>{{$appoint->date}} {{$appoint->time}} </td>
                                            <td>{{$appoint->status}}</td>
                                            
                                            <!-- <td><a type="button" href="{{url('admin_email_view', $appoint->id)}}" class="btn btn-outline-primary">Email</a></td> -->

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


            <!-- Footer -->
           
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

</body>

</html>