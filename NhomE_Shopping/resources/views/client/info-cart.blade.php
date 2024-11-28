<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


<!-- Mirrored from demo1.cloodo.com/html/furnitica/product-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:15:56 GMT -->

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
    <link rel="stylesheet" href="{{ asset('client_template/libs/alert/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client_template/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client_template/css/reponsive.css') }}">
</head>

<body class="product-checkout checkout-cart">
    @include('publics.client-header')

    <!-- main content -->
    <div id="checkout" class="main-content">
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
                                    <span>Thông tin thanh toán</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

            <!-- main -->
            <div id="wrapper-site">
                <div class="container">
                    <div class="row">
                        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                            <div id="main">
                                <div class="cart-grid row">
                                    <div class="col-md-9 check-info">
                                        <div class="checkout-personal-step">
                                            <h3 class="step-title h3 info">
                                            </h3>
                                        </div>
                                        <div class="content">
                                            <ul class="nav nav-inline">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#checkout-guest-form">
                                                        ĐẶT HÀNG
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active show" id="checkout-guest-form" role="tabpanel">
                                                    <form id="myForm">
                                                        <div class="form-group row">
                                                            <input class="form-control" name="name" type="text" placeholder="Nhập họ tên khách hàng" required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <input class="form-control" name="email" type="email" placeholder="Nhập địa chỉ email" required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <input class="form-control" name="phone" type="phone" placeholder="Nhập số điện thoại khách hàng" required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <input class="form-control" name="address" type="text" placeholder="Nhập địa chỉ khách hàng" required>
                                                        </div>
                                                        <input type="submit" class="btn btn-primary pull-xs-right" style="margin-top:10px" value="Đặt hàng">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-grid-right col-xs-12 col-lg-3">
                                        <div class="cart-summary" style="margin-top: 78px; height:286px">
                                            <div class="cart-detailed-totals">
                                                <div class="cart-summary-products">
                                                    <div class="summary-label" id="a">Có tổng {{$totalCount}} sản phẩm trong giỏ hàng</div>
                                                </div>
                                                <div class="cart-summary-line" id="cart-subtotal-products">
                                                    <span class="label js-subtotal">
                                                        Thành tiền là
                                                    </span>
                                                    <span class="value" id="b">{{number_format($totalMoney)}} VNĐ</span>
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
                                                    <span class="value" id="c">{{number_format($totalMoney)}} VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script src="{{ asset('client_template/libs/alert/toastr.min.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('client_template/js/theme.js') }}"></script>
    <script>
        $('#myForm').on('submit', function(e) {
    e.preventDefault();

    // Lấy giá trị từ biểu mẫu
    var name = $('input[name="name"]').val();
    var email = $('input[name="email"]').val();
    var address = $('input[name="address"]').val();
    var phone = $('input[name="phone"]').val();

    // Kiểm tra tính hợp lệ
    var isValid = true;
    var messages = [];

    if (name.length < 8 || name.length > 30) {
        isValid = false;
        messages.push("Tên phải từ 8 đến 30 ký tự.");
    }
    if (email.length > 20 || !/^[A-Za-z0-9._%+-]+@gmail\.com$/.test(email)) {
        isValid = false;
        messages.push("Email phải có đuôi '@gmail.com', tối đa 20 ký tự.");
    }
    if (!/^\d{10}$/.test(phone)) {
        isValid = false;
        messages.push("Số điện thoại phải từ 0-9 và gồm 10 chữ số.");
    }
    if (address.length < 8 || address.length > 60) {
        isValid = false;
        messages.push("Địa chỉ từ 10 ký tự và tối đa 60 ký tự.");
    }

    // Hiển thị thông báo lỗi nếu có
    if (!isValid) {
        toastr.error("Có lỗi xảy ra:\n" + messages.join("\n"));
        return;
    }

    // Gửi yêu cầu AJAX
    $.ajax({
        url: "{{url('/orders/save-order')}}",
        method: 'post',
        data: {
            "_token": "{{ csrf_token() }}",
            name,
            email,
            address,
            phone
        },
        success: function(res) {
            console.log("Phản hồi từ máy chủ:", res); // Ghi lại phản hồi
            if (res) {
                $('#show_cart').empty();
                toastr.success('Đặt hàng thành công!');
                $('input[name="name"]').val("");
                $('input[name="address"]').val("");
                $('input[name="email"]').val("");
                $('input[name="phone"]').val("");
                $('#a').html("Có tổng 0 sản phẩm trong giỏ hàng");
                $('#b').html(0);
                $('#c').html(0);
            } else {
                toastr.warning('Giỏ hàng đang bị trống!');
            }
        },
        error: function(xhr, status, error) {
    console.error("Lỗi:", error);
    console.error("Chi tiết lỗi:", xhr.responseText); // In ra phản hồi từ máy chủ
    toastr.error('Có lỗi xảy ra khi đặt hàng');
}
    });
});
    </script>
</body>
</html>