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
                
                    @if(session()->has('message'))
                    <div class="aler
                    t alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                         {{session()->get('message')}}                        
                      </div>
                      @endif

                    <!-- Content Row -->
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
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
            @include('admin.footer')

</body>

</html>