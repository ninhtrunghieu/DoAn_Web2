
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


<!-- Mirrored from demo1.cloodo.com/html/furnitica/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:19:37 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nhóm E - Project</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Nhóm E - Project">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- libs CSS -->
    <link rel="stylesheet" href="{{ asset('client_template/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/font-material/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/nivo-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/nivo-slider/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/nivo-slider/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/alert/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/slick-slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/slick-slider/css/slick-theme.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('client_template/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client_template/css/reponsive.css') }}">
</head>

<body class="user-login blog">
    @include('publics.client-header')
    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">

            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="#">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Đăng nhập</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <div class="container">
                        <h1 class="text-center title-page">Đăng nhập</h1>
                        <div class="login-form">
                            <form action="/login-post" id="customer-form" method="post">
                                @csrf
                                <div>
                                    <input type="hidden" name="back" value="my-account">
                                    <div class="form-group no-gutters">
                                        <input class="form-control" name="email" type="email" placeholder="Nhập tài khoản">
                                    </div>
                                    <div class="form-group no-gutters">
                                        <div class="input-group js-parent-focus">
                                            <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" placeholder="Nhập mật khẩu">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-center no-gutters">
                                        <input type="hidden" name="submitLogin" value="1">
                                        <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                            Đăng nhập
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    @include('publics.client-footer')
    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <!-- Vendor JS -->
    <script src="{{ asset('client_template/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('client_template/libs/popper/popper.min.js') }}"></script>
    <script src="{{ asset('client_template/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client_template/libs/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('client_template/libs/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client_template/libs/slider-range/js/tmpl.js') }}"></script>
    <script src="{{ asset('client_template/libs/slider-range/js/jquery.dependClass-0.1.js') }}"></script>
    <script src="{{ asset('client_template/libs/slider-range/js/draggable-0.1.js') }}"></script>
    <script src="{{ asset('client_template/libs/slider-range/js/jquery.slider.js') }}"></script>
    <script src="{{ asset('client_template/libs/alert/toastr.min.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('client_template/js/theme.js') }}"></script>
</body>


<!-- Mirrored from demo1.cloodo.com/html/furnitica/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:19:37 GMT -->
</html>