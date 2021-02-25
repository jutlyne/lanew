
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Montana</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('cnew/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('cnew/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('cnew/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('cnew/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('cnew/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('cnew/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('cnew/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('cnew/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('cnew/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('cnew/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('cnew/css/style.css')}}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="{{ Request::is('/') ? 'active' : null}}" href="{{ route('cnew.index.index') }}">home</a></li>
                                        <li><a class="{{ Request::is('cat') ? 'active' : null}}" href="{{ route('cnew.new.cat') }}">rooms</a></li>
                                        <li><a class="{{ Request::is('about') ? 'active' : null}}" href="{{ route('cnew.new.index') }}">About</a></li>
                                        <li><a class="{{ Request::is('contact') ? 'active' : null}}" href="{{ route('cnew.contact.contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">

                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-lg-block">
                                    <a class="" href="{{route('admin.index.index')}}">Sign In</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
