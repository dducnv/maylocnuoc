<header class="header-area">
    <div class="header-large-device">
        <div class="header-top header-top-ptb-1 border-bottom-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="social-offer-wrap">
                            <div class="social-style-1">
                                <a href="#"><i class="icon-social-twitter"></i></a>
                                <a href="#"><i class="icon-social-facebook"></i></a>
                                <a href="#"><i class="icon-social-instagram"></i></a>
                                <a href="#"><i class="icon-social-youtube"></i></a>
                                <a href="#"><i class="icon-social-pinterest"></i></a>
                            </div>
                            {{--                            <div class="header-offer-wrap-2">--}}
                            {{--                                <p><span>FREE SHIPPING</span> world wide for all orders over $199</p>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">

                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-padding-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="{{asset('/')}}">HABECO</a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <form  action="@if(Request::url() !== url('/muc-luc')){{url("/muc-luc")}}@endif" method="get">
                            <div class="categori-search-wrap">
                                <div class="categori-style-1">
                                    <label class="hidden" for="cate"></label>
                                    <select id="cate" name="cate" class="nice-select nice-select-style-1">
                                        <option value="">Tất Cả</option>
                                        {{showCategoriesSearch($categoriesView)}}
                                    </select>
                                </div>
                                <div class="search-wrap-3">
                                    <label class="hidden" for="search"></label>
                                    <input id="search" placeholder="Tìm Kiếm" name="p" type="text">
                                    <button @if(Request::url() !== url('/muc-luc')) type="submit" @else type="button" onclick="functionAjax()" @endif ><i class="lnr lnr-magnifier"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-xl-1 col-lg-1">
                        <div class="header-action header-action-flex">
                            <div class="same-style-2 same-style-2-font-inc header-cart">
                                <a class="cart-active" href="javascript:void(0)">
                                    <i class="icon-basket-loaded"></i>
                                    <span id="cart_qty" class="pro-count green">
                                        {{$cart_qty}}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="main-categori-wrap">
                            <a class="categori-show" href="#"><i class="lnr lnr-menu"></i> Tất Cả Danh Mục <i
                                    class="icon-arrow-down icon-right"></i></a>
                            <div class="category-menu categori-hide"
                                 style="{{ Request::url() == url('/')  ? '' : 'display:none' }}">
                                <ul class="topcatalog-list">
                                    {{showCategoriesNav($categoriesNav)}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main-menu main-menu-padding-1 main-menu-font-size-14 main-menu-lh-2">
                            <nav>
                                <ul>
                                    <li><a href="{{asset('/')}}">Trang Chủ</a></li>
                                    <li><a href="{{asset('/muc-luc')}}">Sản Phẩm</a></li>
                                    <li><a href="{{asset('/lien-he')}}">Liên Hệ</a></li>
                                    <li><a href="{{asset('/gioi-thieu')}}">Giới Thiệu</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="hotline">
                            <p><a href="#"><i class="icon-call-end"></i>0383665477</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-small-device small-device-ptb-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5">
                    <div class="mobile-logo">
                        <a href="{{asset('/')}}">
{{--                            <img alt="" src="assets/images/logo/logo.png">--}}
                            <h4>HABECO</h4>
                        </a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="header-action header-action-flex">
                        <div class="same-style-2 same-style-2-font-inc header-cart">
                            <a class="cart-active" href="{{asset('/gio-hang')}}">
                                <i class="icon-basket-loaded"></i><span id="qty-cart-mobile" class="pro-count green">{{$cart_qty}}</span>
                            </a>
                        </div>
                        <div class="same-style-2 main-menu-icon">
                            <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- mini cart start -->
<div class="sidebar-cart-active">
    <div class="sidebar-cart-all">
        <a class="cart-close" href="javascript:void(0)"><i class="icon_close"></i></a>
        <div class="cart-content">
            <h3>Giỏ Hàng</h3>
            <div id="cart-item">
                <ul>

                    @forelse($cart as $item)
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{$item->product_image}}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">{{$item->product_name}}</a></h4>
                                <span> {{$item->cart_qty}} x @money($item->product_price)</span><br/>
                            </div>
                            <div class="cart-delete">
                                <a href="javascript:void(0)" onclick="removeCartItem({{$item->id}})">×</a>
                            </div>
                        </li>
                    @empty
                        <li class="text-center">Giỏ Hàng Chưa Có Sản Phẩm Nào.</li>
                    @endforelse
                </ul>
                <div class="cart-total">
                    <h4>Tổng Tiền: <span>@money($grandTotal)</span></h4>
                </div>
                <div class="cart-checkout-btn">
                    <a class="btn-hover cart-btn-style" href="{{asset('/gio-hang')}}">Xem Giỏ Hàng</a>
                    @if(count($cart) !=0)
                        <a class="no-mrg btn-hover cart-btn-style" href="{{asset('/thanh-toan')}}">Thanh Toán</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile header start -->
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="clickalbe-sidebar-wrap">
        <a class="sidebar-close"><i class="icon_close"></i></a>
        <div class="mobile-header-content-area">
            {{--            <div class="header-offer-wrap-2 mrg-none mobile-header-padding-border-4">--}}
            {{--                <p><span>FREE SHIPPING</span> world wide for all orders over $199</p>--}}

            {{--            </div>--}}
            <div class="mobile-search mobile-header-padding-border-1">
                <form class="search-form" action="@if(Request::url() !== url('/muc-luc')){{url("/muc-luc")}}@endif" method="get">
                    <input id="search" placeholder="Tìm Kiếm" name="p" type="text">
                    <button @if(Request::url() !== url('/muc-luc')) type="submit" @else type="button" onclick="functionAjax()" @endif class="button-search"><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-padding-border-2">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li><a href="{{asset('/')}}">Trang Chủ</a></li>
                        <li><a href="{{asset('/muc-luc')}}">Sản Phẩm</a></li>
                        <li><a href="{{asset('/lien-he')}}">Liên Hệ</a></li>
                        <li><a href="{{asset('/gioi-thieu')}}">Giới Thiệu</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
                <a class="categori-show" href="#">
                    <i class="lnr lnr-menu"></i>Tất Cả Danh Mục<i class="icon-arrow-down icon-right"></i>
                </a>
                <div class="categori-hide-2">
                    <nav>
                        <ul class="mobile-menu">
                            {{showCategoriesHome($categoriesNavMobile)}}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobile-contact-info mobile-header-padding-border-4">
                <ul>
                    <li><i class="icon-phone "></i> {{$seo->phone_number}}</li>
                    <li><i class="icon-envelope-open "></i>{{$seo->email}}</li>
                    <li><i class="icon-home"></i> {{$seo->address}}</li>
                </ul>
            </div>
            <div class="mobile-social-icon">
                <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
