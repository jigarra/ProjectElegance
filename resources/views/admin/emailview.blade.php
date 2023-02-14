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
                        <h1 class="h3 mb-0 text-gray-800">Send E-Mail</h1>
                        
                    </div>
                    @if(session()->has('message'))

                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                         {{session()->get('message')}}                        
                      </div>
                    
                      @endif
                    <!-- Content Row -->
                    <div class="container-fluid shadow py-5">
                        <form action="{{url('sendemail',$data->id)}}" method="post">
                            @csrf
                            
                            <div class="form-group">
                                <label for="inputAddress">Title</label>
                                <input type="text" name="greeting" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Enter Message</label>
                                <input type="text" name="body" class="form-control" id="inputprice">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Title Of Message</label>
                                <input type="text" name="actiontext" class="form-control" id="inputprice">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">URL</label>
                                <input type="text" name="actionurl" class="form-control" id="inputprice">
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Regards..</label>
                                <input type="text" name="endpart" class="form-control" id="inputprice">
                            </div>
                            
                            <div class="form-group">
                                <a href="/admin_appointment" type="button" class="btn btn-outline-secondary"
                                    data-dismiss="modal">Close</a>
                                <button type="submit" name="submit" value="submit"
                                    class="btn btn-outline-primary">send Email</button>
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