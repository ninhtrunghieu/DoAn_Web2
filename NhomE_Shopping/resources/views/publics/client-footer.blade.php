<footer class="footer-one">
    <div class="inner-footer">
        <div class="container">
            <div class="footer-top col-lg-12 col-xs-12">
                <div class="row">
                    <div class="tiva-html col-lg-4 col-md-12 col-xs-12">
                        <div class="block">
                            <div class="block-cosntent">
                                <p class="logo-footer">
                                    <img src="{{asset('client_template/img/home/logo.png')}}" alt="img">
                                </p>
                                <p class="content-logo">Chào mừng bạn đến với Project của chúng mình!!!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tiva-html col-lg-4 col-md-6">
                        <div class="block m-top">
                            <div class="title-block">
                                Liên hệ vs chúng tôi
                            </div>
                            <div class="block-content">
                                <div class="contact-us">
                                    <div class="title-content">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Địa chỉ :</span>
                                    </div>
                                    <div class="content-contact address-contact">
                                        <p>53, Võ Văn Ngân, Linh Chiểu, Thủ Đức</p>
                                    </div>
                                </div>
                                <div class="contact-us">
                                    <div class="title-content">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>Email :</span>
                                    </div>
                                    <div class="content-contact mail-contact">
                                        <p>nhom_E@gmail.com</p>
                                    </div>
                                </div>
                                <div class="contact-us">
                                    <div class="title-content">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span>Hotline :</span>
                                    </div>
                                    <div class="content-contact phone-contact">
                                        <p>(+84)3457813317</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tiva-modules col-lg-4 col-md-6">
                        <div class="block m-top">
                            <div class="block-content">
                                <div class="title-block">Thành viên</div>
                                <div class="sub-title">Nguyễn Thanh Hùng <br> Ngô Văn Ngọc Khánh <br> Ninh Trung Hiếu <br> Hoàng Đức Khiêm
                                </div>
                            </div>
                        </div>
                        <div class="block m-top1">
                            <div class="block-content">
                                <div class="social-content">
                                    <div class="title-block">
                                        Theo dõi bằng
                                    </div>
                                    <div id="social-block">
                                        <div class="social">
                                            <ul class="list-inline mb-0 justify-content-end">
                                                <li class="list-inline-item mb-0">
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
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
    <div id="tiva-copyright">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-12 ">
                    <span>
                        Copyright © 2024. Design by NHOM_E. All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('client_template/libs/jquery/jquery.min.js') }}"></script>

<script>
    $(document).ready(function() {
        function onLoad() {
            $.ajax({
                url: "{{url('/load-cart')}}",
                method: 'get',
                data: {},
                success: function(res) {
                    if (res) {
                        $('#show_cart').empty();
                        $('#show_cart').append(res);
                    }
                    else{
                        $('#show_cart').empty();
                        $('#show_cart').append("Chưa có sản phẩm nào!");
                    }
                },
                error: function(mess) {
                    console.log(mess);
                }
            });
        }
        onLoad();
        $('#add-to-cart').on('click', function() {
            var id = $(this).data('id_product');
            var count = $('#quantity_wanted').val();
            var count_product = $('#count_product').val();
            if (count < 1) {
                toastr.error('Số lượng phải lớn hơn 0!');
            }
            if (count > count_product - 1) {
                toastr.error('Số lượng vượt quá số lượng cho phép!');
            } else {
                $.ajax({
                    url: "{{url('/add-to-cart')}}",
                    method: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id,
                        count
                    },
                    success: function(res) {
                        if (res) {
                            $('#show_cart').empty();
                            $('#show_cart').append(res);
                            onLoad()
                            toastr.success('Thêm sản phẩm vào giỏ hàng thành công!');
                        }
                    },
                    error: function(mess) {
                        console.log(mess);
                    }
                })
            }
        })
    })
</script>
