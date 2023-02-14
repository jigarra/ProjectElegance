<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.head')
</head>

<body>
    <!-- Topbar Start -->
    @include('user.nevbar')
    <!-- Navbar End -->

    @if(session()->has('message'))

    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{session()->get('message')}}
    </div>
    @endif
   
    <!-- Open Hours Start -->

    <div class="container">
        <div class="col-lg-12">
            <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                <h6 class="text-white text-uppercase bg-primary py-1 px-2 mb-3 text-center">Payment</h6>
                <form action="{{url('user_payment',$service->id)}}" class="needs-validation" method="post">
                    @csrf
                    
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Package</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Time  & Date</th>
                            <th scope="col"></th>
                            <th scope="col-2" class="ml-2">Make Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            <td>{{$razorpayOrder->id}}</td>
                            <th>{{$service->title}}</th>
                            <td>{{$razorpayOrder->amount/100}}</td>
                            <td>{{$data->time}}<br>{{$data->date}}</td>
                            <td></td>
                            <td><button value="submit" id="rzp-button1" class="btn btn-primary my-2">Pay Amount</button></td>
                            <td ><a value="submit" href="{{('/myappointment_user')}}" class="btn btn-primary my-2">On Cash</a></td>
                        </tr>
                        <!--  -->
                    </tbody>
                </table>
            </form>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var urls ="{{url('/paymentdone')}}"    
var options = {
    "key": "rzp_test_Gax5O7bC7BwDUd", // Enter the Key ID generated from the Dashboard
    "amount": "{{$razorpayOrder->amount}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Elegance",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "{{$razorpayOrder->id}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    //"callback_url": "{{url('myappointment_user')}}",
    "handler": function (response){
        window.location.href = urls+'?payment_id='+response.razorpay_payment_id;
    },

    "prefill": {
        "name":"{{Auth::user()->name}}",
        "email":"{{Auth::user()->mail}}", 
        "contact": "{{Auth::user()->contact}}"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>


    <!-- Footer Start -->
    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer Start -->

</body>

</html>