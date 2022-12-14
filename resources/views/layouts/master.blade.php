<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('img/Logo.png')}}" type="image/png">
        <title>PT. Herya Wood Furniture</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
        <link href="/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="/fontawesome/css/brands.css" rel="stylesheet">
        <link href="/fontawesome/css/solid.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/flaticon/flaticon.css')}}">
        <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/csscatalogue.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/csscart.css')}}">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        @include('layouts.__header')
        <!--================Header Menu Area =================-->
        
        @yield('content')
          
        <!--================Footer Area =================-->
        @include('layouts.__footer')
        <!--================End Footer Area =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>