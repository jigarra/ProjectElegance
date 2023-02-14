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
                            <h6 class="m-0 font-weight-bold text-primary">Payments</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Service ID</th>
                                            <th>Service Name</th>
                                            <th>Data-time</th>
                                            <th>Amount</th>
                                            
                                            <th>Appointment ID</th>
                                            <th>Payment ID</th>
                                            <th>Order ID</th>
                                            <th>Payment Status</th>
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($payment as $payment)
                                        <tr>
                                            <td>{{$payment->user_id}}</td> 
                                            <td>{{$payment->service_id}}</td>
                                            <td>{{$payment->ServiceName}}</td>
                                            <td>{{$payment->date}} <br> {{$payment->time}}</td>
                                            <td>{{$payment->amount/100}}</td>
                                            <td>{{$payment->appointment_id}}</td>
                                            <td>{{$payment->payment_id}}</td>
                                            <td>{{$payment->razorpay_id}}</td>
                                            <td>{{$payment->payment_done}}</td>
                                            
                                           
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