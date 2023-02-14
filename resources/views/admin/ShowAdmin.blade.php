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
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Service </h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                            data-toggle="modal" data-target="#exampleModal"><i
                                class="fas fa-upload fa-sm text-white-50"></i>&nbsp Add Admin</a>
                    </div> -->
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
                            <h6 class="m-0 font-weight-bold text-primary">User data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Position</th>
                                            <th>Update</th>
                                            
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        @foreach($data as $user)
                                        <tr>
                                          
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->usertype}}</td>
                                            <td><a type="button" href="{{url('show_admindata',$user->id)}}" class="btn btn-outline-primary">Update</a></td>
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
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Add service Model  -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="container-fluid shadow py-5">
                            <div class="form-group">
                                <label for="inputAddress">Admin Name</label>
                                <input type="text" value="{{$user->name}}" name="name" class="form-control" id="inputAddress"
                                    placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Email</label>
                                <input type="email" value="{{$user->email}}" name="email" class="form-control" id="inputemail"
                                    placeholder="Enter Email">
                            </div>
        
                            <form action="{{url('update_admin/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                           @csrf
                           @method('put')
                            <div class="form-group">
                                <label for="inputAddress">Usertype</label>
                                <select name="usertype" class="form-control">
                                <option value="1" {{ $user->usertype == '1' ? 'selected':'' }}>Admin</option>
                                <option value="0" {{ $user->usertype == '0' ? 'selected':'' }}>User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a href="{{url('/show_admin')}}" class="btn btn-outline-secondary">Back</a>

                                <button type="submit" class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>           
                    </div>
                </div>
            </div>
</div>

            <!-- End Add service Model  -->
        @include('admin.footer')

</body>

</html>