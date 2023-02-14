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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

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
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                            
                                            <th>Phone</th>
                                            <th>Date</th>
                                            <th>Check User<br> servicess</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        @foreach($data as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td><a href="{{url('userdata',$user->id)}}" type="button" class="btn btn-success">servicess</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="card-group">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Data Table -->
            </div>
</div>

        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        @include('admin.footer')

</body>

</html>