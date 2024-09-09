<!DOCTYPE html>
<html lang="zxx">
  
<!-- Mirrored from amincodes.com/html/forsa/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 06:56:08 GMT -->
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- fav icon -->
        <link rel="icon" href="{{asset('frontend/assets/images/fav-icon/fav-icon.png')}}">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="{{asset('frontend/css/vendors/bootstrap.min.css')}}">
        
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{asset('frontend/css/vendors/jquery.fancybox.min.css')}}">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="{{asset('frontend/css/vendors/animate.css')}}">
        
        <!-- Swiper -->
        <link rel="stylesheet" href="{{asset('frontend/css/vendors/swiper.min.css')}}">
        
        <!-- fontAwesome -->
        <link rel="stylesheet" href="{{asset('frontend/css/vendors/all.min.css')}}">
        
        <!-- Splitting -->
        <link rel="stylesheet" href="{{asset('frontend/css/vendors/splitting.css')}}">
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">        
        <!-- styles-LTR -->
        <link rel="stylesheet" href="{{asset('frontend/css/styles-ltr.css')}}">
    <title>Home</title>
  </head>
  <body class=" overlay-is-linear-gradient ">  

    @include('layouts.user.navigation')

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    @include('layouts.user.footer')

    <!-- Start back-to-top Component-->
    <div class="back-to-top" id="back-to-top"><i class="fas fa-arrow-up icon"></i></div>

        <script src="{{asset('frontend/js/vendors/jquery-3.6.1.min.js')}}"></script>
        
        <!--     bootstrap     -->
        <script src="{{asset('frontend/js/vendors/bootstrap.bundle.min.js')}}"></script>
        
        <!--     fancybox     -->
        <script src="{{asset('frontend/js/vendors/jquery.fancybox.min.js')}}"></script>
        
        <!--     countTo     -->
        <script src="{{asset('frontend/js/vendors/jquery.countTo.js')}}"></script>
        
        <!--     wow     -->
        <script src="{{asset('frontend/js/vendors/wow.min.js')}}"></script>
        
        <!--     swiper     -->
        <script src="{{asset('frontend/js/vendors/swiper.min.js')}}"></script>
        
        <!--     isotope     -->
        <script src="{{asset('frontend/js/vendors/isotope-min.js')}}"></script>
        
        <!--     Splitting     -->
        <script src="{{asset('frontend/js/vendors/splitting.min.js')}}"></script>
        
        <!--     main     -->
        <script src="{{asset('frontend/js/main.js')}}"></script>
  </body>

<!-- Mirrored from amincodes.com/html/forsa/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2023 06:56:33 GMT -->
</html>