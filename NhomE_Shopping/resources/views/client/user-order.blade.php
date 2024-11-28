<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


<!-- Mirrored from demo1.cloodo.com/html/furnitica/user-acount.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:19:36 GMT -->

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
    <link rel="stylesheet" href="{{ asset('client_template/libs/slick-slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/slick-slider/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/font-material/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/nivo-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/nivo-slider/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/nivo-slider/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/owl-carousel/assets/owl.carousel.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('client_template/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client_template/css/reponsive.css') }}">
</head>

<body class="user-acount">

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
                                    <span>Thông tin đơn hàng</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

            <div class="acount head-acount">
                <div class="container">
                    <div id="main">
                        <h1 class="title-page">Đơn hàng đang đặt</h1>
                        <div class="content" id="block-history">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {!! session()->get('message') !!}
                            </div>
                            @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                {!! session()->get('error') !!}
                            </div>
                            @endif
                            <table class="std table">
                                <thead>
                                    <tr>
                                        <th style="padding-left: 14px;">Mã hóa đơn</th>
                                        <th style="padding-left: 14px;">Ngày đặt</th>
                                        <th style="padding-left: 14px;">Thành tiền</th>
                                        <th style="padding-left: 14px;">Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($order->count() > 0)
                                        @foreach($order as $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{ date("d-m-Y", strtotime($value->created_at)) }}</td>
                                            <td>{{number_format($value->total)}} đồng</td>
                                            <td>
                                                @if($value->status == 0)
                                                <span style="font-weight:700;color:red">Chờ</span>
                                                @elseif($value->status == 1)
                                                <span style="font-weight:700;color:blue">Xác nhận</span>
                                                @elseif($value->status == 2)
                                                <span style="font-weight:700;color:green">Đang giao</span>
                                                @elseif($value->status == 3)
                                                <span style="font-weight:700;color:black">Thanh toán</span>
                                                @endif
                                                <a style="color: black;font-weight:600; padding-left:50px" href="/order-trash/{{$order[0]->id}}">Hủy đơn hàng</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                        </div>
                        <h1 class="title-page">Lịch sử mua hàng</h1>
                        <div class="content" id="block-history">
                            <table class="std table">
                                <thead>
                                    <tr>
                                        <th style="padding-left: 14px;">Mã hóa đơn</th>
                                        <th style="padding-left: 14px;">Ngày đặt</th>
                                        <th style="padding-left: 14px;">Thành tiền</th>
                                        <th style="padding-left: 14px;">Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($order_trash->count() > 0)
                                        @foreach($order_trash as $value1)
                                        <tr>
                                            <td>{{$value1->id}}</td>
                                            <td>{{ date("d-m-Y", strtotime($value1->created_at)) }}</td>
                                            <td>{{number_format($value1->total)}} đồng</td>
                                            <td>
                                                @if($value1->status == 5)
                                                <span style="font-weight:700;color:orange">Thanh toán</span>
                                                @elseif($value1->status == 4)
                                                <span style="font-weight:700;color:yellow">Đã hủy</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

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
    <script src="{{ asset('client_template/libs/slick-slider/js/slick.min.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('client_template/js/theme.js') }}"></script>
    <!-- Template JS -->
</body>


<!-- Mirrored from demo1.cloodo.com/html/furnitica/user-acount.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:19:37 GMT -->

</html>