@extends('layout')
{{--meta seo--}}
@section("page_title","$product->product_name")
@section("meta_desc","$product->product_desc")
@section("meta_keywords","$product->product_tags")
@section("meta_image","$product->product_image")
{{--.meta seo--}}
@section('main')
    @php
    $images = explode(",",$product->product_gallery)
    @endphp
    <div class="product-details-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-tab">
                        <div class="product-dec-right pro-dec-big-img-slider">
                            @foreach($images as $item)
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a >
                                            <img src="{{$item}}" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="{{$item}}"><i class="icon-size-fullscreen"></i></a>
                                </div>
                            @endforeach
                        </div>
                        <div class="product-dec-left product-dec-slider-small-2 product-dec-small-style2">
                            @foreach($images as $item)
                                <div class="product-dec-small active">
                                    <img src="{{$item}}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-content pro-details-content-mt-md">
                        <h2>{{$product->product_name}}</h2>
                        <div class="product-ratting-review-wrap">
                            <div class="product-ratting-digit-wrap">
                                <div class="product-ratting">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <div class="product-digit">
                                    <span>5.0</span>
                                </div>
                            </div>
{{--                            <div class="product-review-order">--}}
{{--                                <span>242 đơn đã đặt</span>--}}
{{--                            </div>--}}
                        </div>
                        <p>{!! $product->product_desc !!}</p>
                        <div class="pro-details-quality">
                            <span>Số Lượng:</span>
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" id="qty-{{$product->id}}" type="text" name="qtybutton" value="1">
                            </div>
                        </div>
                        <div class="product-details-meta">
                            <ul>
                                <li><span>Danh Mục:</span> <a href="">{{$product->category->category_name}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-action-wrap">
                            <div class="pro-details-add-to-cart">
                                @csrf
                                <a title="Add to Cart" onclick="addToCart({{$product->id}})" href="javascript:void(0)">Thêm Giỏ Hàng </a>
                            </div>
                            <div class="pro-details-action">
                                <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                <div class="product-dec-social">
                                    <a class="facebook" title="Facebook" href="#"><i
                                            class="icon-social-facebook"></i></a>
                                    <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                    <a class="instagram" title="Instagram" href="#"><i
                                            class="icon-social-instagram"></i></a>
                                    <a class="pinterest" title="Pinterest" href="#"><i
                                            class="icon-social-pinterest"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-wrapper pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dec-review-topbar nav mb-45">
                        <a class="active" data-toggle="tab" href="#des-details1">Mô Tả Chi Tiết</a>
                        <a data-toggle="tab" href="#des-details2">Thông Số Kỹ Thuật</a>
                    </div>
                    <div class="tab-content dec-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="description-wrap">
                               {!! $product->product_content !!}

                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="specification-wrap table-responsive">
                                {!! $product->product_specification !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product pb-115">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <h2>Sản Phẩm Cùng Danh Mục</h2>
            </div>
            <div class="related-product-active">
                @if($count_prod != 0)
                @foreach($products as $item)
                    @if($item->category_id == $product->category_id && $product->id != $item->id)
                            <div class="product-plr-1">
                                <div class="single-product-wrap mb-60">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="{{url('/chi-tiet',['slug'=>$item->product_slug])}}">
                                            <img src="{{$item->product_image}}" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-40%</span>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a class="blue"
                                               href="#">{{$item->category->category_name}}</a>
                                        </div>
                                        <h3><a class="blue"
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
                                            <span>@money($item->product_price)</span>
                                        </div>
                                    </div>
                                    <div
                                        class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <div class="product-content-categories">
                                            <a class="blue"
                                               href="#">{{$item->category->category_name}}</a>
                                        </div>
                                        <h3><a class="blue"
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
                                        </div>
                                        <div class="product-price-4">
                                            <span>@money($item->product_price)</span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button onclick="addToCart({{$item->id}})">Thêm Giỏ Hàng
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                    @endif
                @endforeach
                @else
                    <div class="text-center">
                        <span>Không có sản phẩm nào có cùng với danh mục {{$product->category->category_name}}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
