@extends('layout')
{{--meta seo--}}
@section("page_title","Trang Chủ")
@section("meta_desc","$seo->meta_desc")
@section("meta_keywords","$seo->meta_keywords")
@section("meta_image","$seo->meta_image")
{{--.meta seo--}}
@section('main')
    <div class="slider-area pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 ml-auto">
                    <div class="hero-slider-active-1 nav-style-1  nav-style-1-modify-2  bg-gray-7">
                        @foreach($slideshow as $item)
                            <div class="slider-test ">
                                <img src="{{$item->image}}" alt=""/>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-area pb-60">
        <div class="container">
            <div class="service-wrap-border service-wrap-padding-3">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2 icon-purple">
                                <i class="icon-cursor"></i>
                            </div>
                            <div class="service-content-2">
                                <h3>Miễn Phí Giao Hàng</h3>
                                <p>Đơn Từ 3,000,000VNĐ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1 service-border-1-none-md">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2 icon-purple">
                                <i class="icon-refresh "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>Đổi Trả Trong 60 Ngày</h3>
                                <p>Cho Các vẫn đề của sản phẩm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2 icon-purple">
                                <i class="icon-credit-card "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>Thanh Toán Nhanh</h3>
                                <p>Chuyển Khoản</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2 icon-purple">
                                <i class="icon-earphones "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>Hỗ Trợ 24H</h3>
                                <p>Tư vấn về sản phẩm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($viewed != null)

        <div class="product-area pb-60">
            <div class="container">
                <div class="section-title-btn-wrap border-bottom-3 mb-50 pb-20">
                    <div class="section-title-deal-wrap">
                        <div class="section-title-3">
                            <h2>Sản Phẩm Đã Xem</h2>
                        </div>
                        {{--                    <div class="timer-wrap-2">--}}
                        {{--                        <h4><i class="icon-speedometer"></i> Expires in:</h4>--}}
                        {{--                        <div class="timer-style-2" id="timer-2-active"></div>--}}
                        {{--                    </div>--}}
                    </div>
                    {{--                <div class="btn-style-7">--}}
                    {{--                    <a href="#">All Product</a>--}}
                    {{--                </div>--}}
                </div>
                <div class="product-slider-active-3 nav-style-3">
                    @foreach($viewed as $item)
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="{{url('/chi-tiet',['slug'=>$item->product_slug])}}">
                                        <img src="{{$item->product_image}}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-40%</span>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a class="purple" href="#">{{$item->category->category_name}}</a>
                                    </div>
                                    <h3><a class="purple"
                                           href="{{url('/chi-tiet',['slug'=>$item->product_slug])}}">{{$item->product_name}}</a>
                                    </h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">@money($item->product_price)</span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a class="purple" href="#">{{$item->category->category_name}}</a>
                                    </div>
                                    <h3><a class="purple" href="{{url('/chi-tiet',['slug'=>$item->product_slug])}}">{{$item->product_name}}</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">@money($item->product_price)</span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button onclick="addToCart({{$item->id}})" title="Add to Cart">Thêm Giỏ Hàng
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif
    <div class="product-area pb-60">
        <div class="container">
            @foreach($category as $cate_item)
                @if($cate_item->product_count > 0 )
                    <div class="section-title-btn-wrap border-bottom-3 mb-50 pb-20">
                        <div class="section-title-deal-wrap">
                            <div class="section-title-3">
                                <h2>{{$cate_item->category_name}}</h2>
                            </div>
                        </div>
                        <div class="btn-style-7">
                            <a href="{{asset('muc-luc?cate='.$cate_item->category_slug)}}">Tất Cả Sản Phẩm Của Danh Mục</a>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($products as $prod_item)
                            @if($prod_item->category_id === $cate_item->id )
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap mb-60">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="{{url('/chi-tiet',['slug'=>$prod_item->product_slug])}}">
                                                    <img src="{{$prod_item->product_image}}" alt="">
                                                </a>
                                                <span class="pro-badge left bg-red">-40%</span>
                                                <div class="product-action-2 tooltip-style-2">
                                                    <button title="Xem Nhanh" data-toggle="modal"
                                                            data-target="#product-{{$prod_item->id}}"><i
                                                            class="icon-eye icons"></i></button>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-3">
                                                <div class="product-content-categories">
                                                    <a class="blue"
                                                       href="#">{{$prod_item->category->category_name}}</a>
                                                </div>
                                                <h3><a class="blue"
                                                       href="{{url('/chi-tiet',['slug'=>$prod_item->product_slug])}}">{{$prod_item->product_name}}</a>
                                                </h3>
                                                <div class="product-rating-wrap-2">
                                                    <div class="product-rating-4">
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                    </div>
                                                    <span>(4)</span>
                                                </div>
                                                <div class="product-price-4">
                                                    <span>@money($prod_item->product_price)</span>
                                                </div>
                                            </div>
                                            <div
                                                class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                                <div class="product-content-categories">
                                                    <a class="blue"
                                                       href="#">{{$prod_item->category->category_name}}</a>
                                                </div>
                                                <h3><a class="blue"
                                                       href="{{url('/chi-tiet',['slug'=>$prod_item->product_slug])}}">{{$prod_item->product_name}}</a>
                                                </h3>
                                                <div class="product-rating-wrap-2">
                                                    <div class="product-rating-4">
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                    </div>
                                                    <span>(4)</span>
                                                </div>
                                                <div class="product-price-4">
                                                    <span>@money($prod_item->product_price)</span>
                                                </div>
                                                <div class="pro-add-to-cart-2">
                                                    <button onclick="addToCart({{$prod_item->id}})">Thêm Giỏ Hàng
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal modal-quickview fade" id="product-{{$prod_item->id}}"
                                         tabindex="-1" role="dialog">
                                        {{ csrf_field() }}

                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">x</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                                            <div class="image-quickView">
                                                                <img src="{{$prod_item->product_image}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                                            <div class="product-details-content quickview-content">
                                                                <h2>{{$prod_item->product_name}}</h2>
                                                                <div class="product-ratting-review-wrap">
                                                                    <div class="product-review-order">
                                                                        <span>242 orders</span>
                                                                    </div>
                                                                </div>
                                                                <p>{!! $prod_item->product_desc !!}</p>
                                                                <div class="pro-details-price">
                                                                    <span class="new-price">@money($prod_item->product_price)</span>
                                                                    <span class="old-price">$95.72</span>
                                                                </div>

                                                                <div class="pro-details-quality">
                                                                    <span>Quantity:</span>
                                                                    <div class="cart-plus-minus">
                                                                        <form>
                                                                            <label>
                                                                                <input class="cart-plus-minus-box"
                                                                                       type="text"
                                                                                       id="qty-{{$prod_item->id}}"
                                                                                       min="1" value="1">
                                                                            </label>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="product-details-meta">
                                                                    <ul>
                                                                        <li><span>Danh Mục:</span> <a
                                                                                href="#">{{$prod_item->category->category_name}}</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-details-action-wrap">
                                                                    <div class="pro-details-add-to-cart">
                                                                        <a title="Add to Cart"
                                                                           onclick="addToCart({{$prod_item->id}})"
                                                                           href="javascript:void(0)">Thêm Giỏ Hàng</a>
                                                                    </div>
                                                                    <div class="pro-details-action">
                                                                        <a class="social" title="Social" href="#"><i
                                                                                class="icon-share"></i></a>
                                                                        <div class="product-dec-social">
                                                                            <a class="facebook" title="Facebook"
                                                                               href="#"><i
                                                                                    class="icon-social-facebook"></i></a>
                                                                            <a class="twitter" title="Twitter" href="#"><i
                                                                                    class="icon-social-twitter"></i></a>
                                                                            <a class="instagram" title="Instagram"
                                                                               href="#"><i
                                                                                    class="icon-social-instagram"></i></a>
                                                                            <a class="pinterest" title="Pinterest"
                                                                               href="#"><i
                                                                                    class="icon-social-pinterest"></i></a>
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
                            @endif
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
