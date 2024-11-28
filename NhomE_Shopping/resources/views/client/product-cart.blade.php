<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


<!-- Mirrored from demo1.cloodo.com/html/furnitica/product-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:15:54 GMT -->

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

<body class="product-cart checkout-cart blog">

    @include('publics.client-header')

    <!-- main content -->
    <div class="main-content" id="cart">
        <!-- main -->
        <div id="wrapper-site">
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
                                    <span>Giỏ hàng</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                        <section id="main">
                            <div class="cart-grid row">
                                <div class="col-md-9 col-xs-12 check-info">
                                    <h1 class="title-page">Chi tiết giỏ hàng</h1>
                                    <div class="cart-container">
                                        @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {!! session()->get('message') !!}
                                        </div>
                                        @elseif(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {!! session()->get('error') !!}
                                        </div>
                                        @endif
                                        <form action="{{url('/update-cart')}}" method="POST">
                                            @csrf
                                            <div class="cart-overview js-cart">
                                                <ul class="cart-items">
                                                    @foreach($data as $item)
                                                    <li class="cart-item">
                                                        <div class="product-line-grid row justify-content-between">
                                                            <!--  product left content: image-->
                                                            <div class="product-line-grid-left col-md-2">
                                                                <span class="product-image media-middle">
                                                                    <a href="">
                                                                        <img class="img-fluid" src="/images/{{$item['product_img']}}" alt="Organic Strawberry Fruits">
                                                                    </a>
                                                                </span>
                                                            </div>
                                                            <div class="product-line-grid-body col-md-6">
                                                                <div class="product-line-info">
                                                                    <a class="label" href="" data-id_customization="0">{{$item['product_name']}}</a>
                                                                </div>
                                                                <div class="product-line-info product-price">
                                                                    <span class="value">{{number_format($item['product_price'])}} VNĐ</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-line-grid-right text-center product-line-actions col-md-4">
                                                                <div class="row">
                                                                    <div class="col-md-5 col qty">
                                                                        <div class="label">Số lượng:</div>
                                                                        <div class="quantity">
                                                                            <input type="number" style="width:70px" min="1" name="{{$item['session_id']}}" value="{{$item['product_count']}}" class="input-group form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 col price">
                                                                        <div class="label">Total:</div>
                                                                        <div class="product-price total">
                                                                            {{number_format((integer)$item['product_price']*(integer)$item['product_count'])}} VNĐ
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2 col text-xs-right align-self-end">
                                                                        <div class="cart-line-product-actions ">
                                                                            <a class="remove-from-cart" rel="nofollow" href="{{url('/delete-p/'.$item['session_id'])}}" data-link-action="delete-from-cart" data-id-product="1">
                                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Cập nhập giỏ hàng</button>
                                            <a href="/info-cart" class="continue btn btn-primary pull-right">ĐẶT HÀNG</a>
                                            <br>
                                            
                                            <!-- Phân trang -->
                                            @if($data->hasPages())
                                                <div class="pagination justify-content-center">
                                                    <div class="js-product-list-top">
                                                        <div style="margin-top: 14px;" class="d-flex justify-content-around row">
                                                            {{ $data->links() }}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                       </form>
                                    </div>
                                </div>
                                <div class="cart-grid-right col-xs-12 col-lg-3">
                                    <div class="cart-summary" style="margin-top: 78px; height:286px">
                                        <div class="cart-detailed-totals">
                                            <div class="cart-summary-products">
                                                <div class="summary-label">Có tổng {{$totalCount}} sản phẩm trong giỏ hàng</div>
                                            </div>
                                            <div class="cart-summary-line" id="cart-subtotal-products">
                                                <span class="label js-subtotal">
                                                    Thành tiền là
                                                </span>
                                                <span class="value">{{number_format($totalMoney)}} VNĐ</span>
                                            </div>
                                            <div class="cart-summary-line" id="cart-subtotal-shipping">
                                                <span class="label">
                                                    Phí vẫn chuyển:
                                                </span>
                                                <span class="value">Miễn phí</span>
                                                <div>
                                                    <small class="value"></small>
                                                </div>
                                            </div>
                                            <div class="cart-summary-line cart-total">
                                                <span class="label">Tổng thanh toán là:</span>
                                                <span class="value">{{number_format($totalMoney)}} VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
</html>