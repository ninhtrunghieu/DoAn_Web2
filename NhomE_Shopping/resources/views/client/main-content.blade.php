<div class="main-content">
    <div class="wrap-banner">
        <!-- menu category -->
        <div class="container position">
            <div class="section menu-banner d-xs-none">
                <div class="tiva-verticalmenu block">
                    <div class="box-content">
                        <div class="verticalmenu" role="navigation">
                            @include('publics.category')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide show -->
        <div class="section banner">
            <div class="tiva-slideshow-wrapper">
                <div id="tiva-slideshow" class="nivoSlider">
                    <a>
                        <img class="img-responsive" src="{{asset('client_template/img/home/home1-banner1.jpg')}}" title="#caption1" alt="Slideshow image">
                    </a>
                    <a>
                        <img class="img-responsive" src="{{asset('client_template/img/home/home1-banner2.jpg')}}" title="#caption2" alt="Slideshow image">
                    </a>
                    <a>
                        <img class="img-responsive" src="{{asset('client_template/img/home/home1-banner3.jpg')}}" title="#caption3" alt="Slideshow image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- main -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <section class="page-home">
                   

                    <!-- product living room -->
                    <div class="section living-room">
                        <div class="container">
                            <div class="tiva-row-wrap row">
                                <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                    <div class="grouptab row">
                                        
                                        <div class="categoriestab-left product-tab col-md-12 flex-9">
                                            <div class="title-tab-content d-flex justify-content-start">
                                                <h2 class="title-room col-md-4"
                                                    style="font-size: 40px; font-weight: bold; color: #333; text-align: center; margin-right: 50px;">
                                                    Phòng khách
                                                </h2>
                                                <ul class="nav nav-tabs col-md-8"> 
                                                    <li>
                                                        <a href="#new" data-toggle="tab" class="active">Sản phẩm mới</a>
                                                    </li>
                                                    <li>
                                                        <a href="#best" data-toggle="tab">Sản phẩm khuyến mãi</a>
                                                    </li>
                                                    <li>
                                                        <a href="#sale" data-toggle="tab">Sản phẩm hot</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div id="new" class="tab-pane fade in active show">
                                                    <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                        @foreach($living_room_new as $item1)
                                                        <div class="item text-center">
                                                            <div class="product-miniature first-item js-product-miniature item-one">
                                                                <div class="thumbnail-container">
                                                                    <a href="/detail/{{$item1->id}}">
                                                                        <img class="img-fluid image-cover" src="/images/{{$item1->images}}" alt="img">
                                                                        <img class="img-fluid image-secondary" src="/images/{{$item1->images}}" alt="img">
                                                                    </a>
                                                                    <div class="product-flags discount">-30%</div>
                                                                    <div class="highlighted-informations">
                                                                        <div class="variant-links">
                                                                            <a href="#" class="color beige" title="Beige"></a>
                                                                            <a href="#" class="color orange" title="Orange"></a>
                                                                            <a href="#" class="color green" title="Green"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a href="">{{$item1->name}}</a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">{{number_format($item1->price)}} VNĐ</span>                                                                           
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="best">
                                                    <div class="category-product-index owl-carousel owl-theme">
                                                        @foreach($living_room_sale as $item2)
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="/detail/{{$item2->id}}">
                                                                        <img class="img-fluid image-cover" src="/images/{{$item2->images}}" alt="img">
                                                                        <img class="img-fluid image-secondary" src="/images/{{$item2->images}}" alt="img">
                                                                    </a>
                                                                    <div class="product-flags discount">-30%</div>
                                                                    <div class="highlighted-informations">
                                                                        <div class="variant-links">
                                                                            <a href="#" class="color beige" title="Beige"></a>
                                                                            <a href="#" class="color orange" title="Orange"></a>
                                                                            <a href="#" class="color green" title="Green"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a href="/detail/{{$item2->id}}">{{$item2->name}}</a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">{{$item2->price}}</span>
                                                                                <del class="regular-price">{{$item2->discount}}</del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="sale">
                                                    <div class="category-product-index owl-carousel owl-theme">
                                                        @foreach($living_room_hot as $item3)
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="/detail/{{$item3->id}}">
                                                                        <img class="img-fluid image-cover" src="/images/{{$item3->images}}" alt="img">
                                                                        <img class="img-fluid image-secondary" src="/images/{{$item3->images}}" alt="img">
                                                                    </a>
                                                                    <div class="product-flags discount">-30%</div>
                                                                    <div class="highlighted-informations">
                                                                        <div class="variant-links">
                                                                            <a href="#" class="color beige" title="Beige"></a>
                                                                            <a href="#" class="color orange" title="Orange"></a>
                                                                            <a href="#" class="color green" title="Green"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a href="/detail/{{$item3->id}}">{{$item3->name}}</a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">{{$item3->price}}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('client_template/img/home/effect1.jpg') }}" alt="banner-1" title="banner-1">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('client_template/img/home/effect2.jpg') }}" alt="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section best-sellers col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="groupproductlist">
                                        <div class="row d-flex align-items-center">
                                            <!-- column 4 -->
                                            <div class="flex-4 col-lg-4 flex-4">
                                                <h2 class="title-block">
                                                    <span class="sub-title">Danh sách khuyến mãi lớn</span>Khuyến mãi
                                                </h2>
                                                <div class="content-text">
                                                    <p> Chào mừng khách hàng đến với cửa hàng của chúng tôi. Chúc quý khách mua sắm vui vẻ!
                                                    </p>
                                                    <div>
                                                        <a href="#"> Xem thêm </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- column 8 -->
                                            <div class="block-content col-lg-8 flex-8">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active show">
                                                        <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                            @foreach($list_sale as $sale)
                                                            <div class="item text-center">
                                                                <div style="border-bottom: none;" class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/detail/{{$sale->id}}">
                                                                            <img class="img-fluid image-cover" src="/images/{{$sale->images}}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/images/{{$sale->images}}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/detail/{{$sale->id}}">{{$sale->name}}</a>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">{{$sale->discount}}</span>
                                                                                    <del class="regular-price">{{$sale->price}}</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
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

                    <div class="section kitchen">
                        <div class="living-room">
                            <div class="container">
                                <div class="tiva-row-wrap row">
                                    <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                        <div class="grouptab row">
                                            
                                            <div class="categoriestab-left product-tab col-md-12 flex-9">
                                                <div class="title-tab-content d-flex justify-content-start">
                                                <h2 class="title-room col-md-4"
                                                    style="font-size: 40px; font-weight: bold; color: #333; text-align: center; margin-right: 50px;">
                                                    Phòng Bếp
                                                </h2>
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#new1" data-toggle="tab" class="active">Sản phẩm mới</a>
                                                        </li>
                                                        <li>
                                                            <a href="#best1" data-toggle="tab">Sản phẩm khuyến mãi</a>
                                                        </li>
                                                        <li>
                                                            <a href="#sale1" data-toggle="tab">Sản phẩm hot</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="new1" class="tab-pane fade in active show">
                                                        <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                            @foreach($kitchen_room_new as $item5)
                                                            <div class="item text-center">
                                                                <div class="product-miniature first-item js-product-miniature item-one">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/detail/{{$item5->id}}">
                                                                            <img class="img-fluid image-cover" src="/images/{{$item5->images}}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/images/{{$item5->images}}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/detail/{{$item5->id}}">{{$item5->name}}</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">{{number_format($item5->price)}} VNĐ</span>
                                                                                    <!-- <del class="regular-price">£28.68</del> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="best1">
                                                        <div class="category-product-index owl-carousel owl-theme">
                                                            @foreach($kitchen_room_sale as $item6)
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/detail/{{$item6->id}}">
                                                                            <img class="img-fluid image-cover" src="/images/{{$item6->images}}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/images/{{$item6->images}}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/detail/{{$item6->id}}">{{$item6->name}}</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">{{$item6->price}}</span>
                                                                                    <del class="regular-price">{{$item6->discount}}</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="sale1">
                                                        <div class="category-product-index owl-carousel owl-theme">
                                                            @foreach($kitchen_room_hot as $item7)
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/detail/{{$item7->id}}">
                                                                            <img class="img-fluid image-cover" src="/images/{{$item7->images}}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/images/{{$item7->images}}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/detail/{{$item7->id}}">{{$item7->name}}</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">{{$item7->price}}</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
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

                    <!-- banner -->
                    <div class="container">
                        <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('client_template/img/home/effect3.jpg') }}" alt="banner-1" title="banner-1">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('client_template/img/home/effect4.jpg') }}" alt="banner-2" title="banner-2">
                                        </a>
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