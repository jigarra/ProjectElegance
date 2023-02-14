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
                        <h1 class="h3 mb-0 text-gray-800">Service </h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                            data-toggle="modal" data-target="#exampleModal"><i
                                class="fas fa-upload fa-sm text-white-50"></i>&nbsp Add Service</a>
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
                            <h6 class="m-0 font-weight-bold text-primary">User data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($service as $service)
                                        <tr>
                                            <td>{{$service->title}}</td>
                                            <td>{{$service->discription}}</td>
                                            <td>{{$service->price}}</td>
                                            <td><img class="h-10 w-10" src="addservicesimage/{{ $service->image }}"/></td>
                                            <td><a type="button" href="{{url('update_service',$service->id)}}" class="btn btn-outline-primary">Update</a></td>
                                            <td><a type="button" href="{{url('delete_service',$service->id)}}" class="btn btn-outline-primary">Delete</a></td>
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
                        <form action="{{url('admin_upload_service')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-4">

                                @if(Auth::id())
                                @if(Auth::user()->usertype=='3')
                                <label for="inputAddress">Service Title</label>
                                <input type="text" name="title" class="form-control" id="inputAddress"
                                    placeholder="Enter Here">
                                @else
                                    <label for="inputState">Service</label>
                                    <select id="inputState" class="form-control" name="title">
                                    
                                        <option selected>Choose...</option>
                                        <option>Hair Cutting</option>
                                        <option>Face treatment</option>
                                        <option>Body scrub</option>
                                        <option>Beard </option>
                                        <option>Hair Wash</option>
                                        <option>Hair color</option>
                                        <option>Hair color & WASH</option>
                                    </select>
                                    
                                    @endif
                                @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Discription</label>
                                <input type="text" name="discription" class="form-control" id="inputAddress"
                                    placeholder="Enter Here">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Price</label>
                                <input type="text" name="price" class="form-control" id="inputprice"
                                    placeholder="Enter Price">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" require/>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-outline-secondary"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" value="submit"
                                    class="btn btn-outline-primary">Submit</button>
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