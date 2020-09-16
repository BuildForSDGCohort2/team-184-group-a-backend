<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title> Royal Hotel</title>
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/img/favicon_60x60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/favicon_76x76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/favicon_120x120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/favicon_152x152.png')}}">
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/animsition/dist/css/animsition.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!-- CSS Icons -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">

    <!-- CSS Theme -->
    <link id="theme" rel="stylesheet" href="{{asset('css/themes/theme-beige.css')}}">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body>
    <div class="wrapper" id="app">
        <!-- Main content -->
        <div class="content">
        <div class="container-fluid">
                <router-view></router-view>
                <vue-progress-bar></vue-progress-bar>
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <script src = "/js/app.js"></script>
    <!-- JS Plugins -->
    <script src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{asset('plugins/jquery.appear/jquery.appear.js')}}"></script>
    <script src="{{asset('plugins/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('plugins/jquery.localscroll/jquery.localScroll.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('plugins/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('plugins/twitter-fetcher/js/twitterFetcher_min.js')}}"></script>
    <script src="{{asset('js/backend_js/matrix.form_validation.js') }}"></script>
    <script src="{{asset('plugins/skrollr/dist/skrollr.min.js')}}"></script>
    <!-- JS Core -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAejxUruUkUhtoM5-PVb6ucheSwZVZuE-I&libraries=places,geometry"></script>
    <script src="{{asset('js/core.js')}}"></script>
    <script src="{{asset('test.js')}}"></script>
    <script src="{{asset('js/delivery.js')}}"></script>
    <script src="{{asset('js/payment.js')}}"></script>
</body>
</html>
