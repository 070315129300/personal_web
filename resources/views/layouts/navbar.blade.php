<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Caleb Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	 <!-- Scripts -->
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{url('/')}}"><span style="color:brown; font-size:50px">IKHIDE<span></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                      <nav>
                                <ul id="navigation">
                                    {{-- <li class="active"><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('about')}}">About</a></li> --}}
                                    {{-- <li><a href="{{url('portfolio')}}">Portfolio</a></li> --}}
                                    {{-- <li><a href="{{url('content')}}">Contact</a></li> --}}
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <div class="header-info-right d-none d-lg-block">
                            <a href="#lettalk" class="btn header-btn" for="lettalk">Let's Talk <i class="ti-arrow-right"></i></a>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	@yield('content')

