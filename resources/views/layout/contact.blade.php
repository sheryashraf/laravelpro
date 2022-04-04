@extends('layout.navbar')
@section('contact')

  <!doctype html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
 .wrapper {
    height: 100vh;
    background: #000;
    background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdevcqGre0ZIdkkHCiKQpdBEuDVXof-vr33E5fAvnO86O6dAVIdG8VW5IT25QxjSTpdGU&usqp=CAU");
    background-size: cover;
    width: 100%
}


.contact-us {
    margin-top: 50px;
    margin-bottom: 50px;
    color: #fff

}


        </style>
</head>

<body>
    <div class="container">
  <div class="wrapper">
    <div class="">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="">
                <div class="contact-us text-center">
                    <h3>CONTACT US</h3>
                    <p class="mb-5">courses website</p>
                    <div class="row">
                        <div class="">
                            <div class=" text-center px-3">
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" px-1">
                                <div class="  ">
                                    <h5>Send Message</h5>
                                    <div class="mt-4 inputs"> <input type="text" class="form-control" placeholder="Name"> <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Type your message"></textarea> </div>
                                    <div class="button mt-4 text-left"> <button class="btn btn-dark">Send</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</body>

</html>
@endsection
