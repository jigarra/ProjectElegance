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
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Update Service</h1>   
                    </div>

                    <!-- Page Heading -->
                    @if(session()->has('message'))

                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                         {{session()->get('message')}}                        
                      </div>

                      

                    
                      @endif
                    <!-- Content Row -->
                    <div class="container-fluid shadow py-5">
                        <form action="{{url('admin_edit_service',$data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Service</label>
                                    <select id="inputState" class="form-control" name="title">
                                        <option selected>{{$data->title}}</option>
                                        <option>Hair Cutting</option>
                                        <option>Face treatment</option>
                                        <option>Body scrub</option>
                                        <option>Beard </option>
                                        <option>Hair Wash</option>
                                        <option>Hair color</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Discription</label>
                                <input type="text" name="discription" class="form-control" id="inputAddress"
                                    value="{{$data->discription}}">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Price</label>
                                <input type="number" name="price" class="form-control" id="inputprice"
                                    value="{{$data->price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="FormControl">Old Image</label>
                                <img class="h-10 w-10" src="/addservicesimage/{{$data->image}}">
                            </div>
                            <div class="form-group">
                                <a  href="{{url('/admin_add_service')}}" type="button" class="btn btn-outline-secondary">Close</a>
                                <button type="submit" name="submit" value="submit"
                                    class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                
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
            @include('admin.footer')

</body>

</html>