<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--Laravel--}}
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/frontend/img/favicon.ico')}}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>{{config('app.name')}}</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
</head>
<body>
<!-- start header Area -->
@include('frontend.inc.header')
<!-- end header Area -->

<!-- start banner Area -->
@include('frontend.inc.banner')
<!-- End banner Area -->

<!-- Start top-category-widget Area -->
@include('frontend.inc.top-category-widget')
<!-- End top-category-widget Area -->

<!-- Start post-content Area -->
<section class="post-content-area" id="app">
    <div class="container">
        <div class="row">
            <router-view></router-view>

            {{--@include('frontend.inc.posts-list')--}}

            @include('frontend.inc.sidebar-widgets')
        </div>
    </div>
</section>
<!-- End post-content Area -->

<!-- start footer Area -->
@include('frontend.inc.footer')
<!-- End footer Area -->

<script src="js/app.js"></script>

{{--<script src="{{asset('assets/frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/frontend/js/vendor/bootstrap.min.js')}}"></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('assets/frontend/js/easing.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/hoverIntent.js')}}"></script>
<script src="{{asset('assets/frontend/js/superfish.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/mail-script.js')}}"></script>
<script src="{{asset('assets/frontend/js/main.js')}}"></script>
</body>
</html>