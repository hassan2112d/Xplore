<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title >XPLORE - Travel Agency </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
       

    <!-- Favicon -->
    <link rel="icon" href="{{url('frontend/img/airplane.png')}}"> 

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('frontend/lib/animate/animate.min.css')}}"rel="stylesheet">
    <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <style>
     


    </style>
</head>

<body>
 


   


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{url('')}}" class="navbar-brand p-0">
                <h1 class=" text-danger animated fadeInUp">XPLORE</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 animated fadeInUp">
                    <a href="{{url('')}}" class="nav-item nav-link active" id="home" >Home</a>
                    <a href="{{url('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{url('')}}" class="nav-item nav-link">Services</a>
                    <a href="{{url('')}}" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.html" class="dropdown-item">Destination</a>
                            <a href="booking.html" class="dropdown-item">Booking</a>
                            <a href="team.html" class="dropdown-item">Travel Plans</a>
                            <a href="testimonial.html" class="dropdown-item">Hotels</a>
                            
                        </div>
                    </div>
                    <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" id="register" class="btn btn-danger rounded py-2 px-4 animated fadeInUp">Get Started</a>
            </div>
        </nav>