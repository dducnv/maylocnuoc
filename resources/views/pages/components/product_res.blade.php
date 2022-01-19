<div class="shop-bottom-area">
    <div class="tab-content jump">
        <div id="shop-1" class="tab-pane">
            <div class="row">
                @forelse($products as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-plr-1">
                            <div class="single-product-wrap mb-60">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="{{url('/chi-tiet',['slug'=>$item->product_slug])}}">
                                        <img src="{{$item->product_image}}" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-40%</span>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Xem Nhanh" data-toggle="modal"
                                                data-target="#product-{{$item->id}}"><i
                                                class="icon-eye icons"></i></button>
                                    </div>
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
                        <div class="modal modal-quickview fade" id="product-{{$item->id}}"
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
                                                    <img src="{{$item->product_image}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                                <div class="product-details-content quickview-content">
                                                    <h2>{{$item->product_name}}</h2>
                                                    <div class="product-ratting-review-wrap">
                                                        <div class="product-review-order">
                                                            <span>242 orders</span>
                                                        </div>
                                                    </div>
                                                    <p>{!! $item->product_desc !!}</p>
                                                    <div class="pro-details-price">
                                                        <span class="new-price">@money($item->product_price)</span>
                                                        <span class="old-price">$95.72</span>
                                                    </div>

                                                    <div class="pro-details-quality">
                                                        <span>Quantity:</span>
                                                        <div class="cart-plus-minus">
                                                            <form>
                                                                <label>
                                                                    <input class="cart-plus-minus-box"
                                                                           type="text"
                                                                           id="qty-{{$item->id}}"
                                                                           min="1" value="1">
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-details-meta">
                                                        <ul>
                                                            <li><span>Danh Mục:</span> <a
                                                                    href="#">{{$item->category->category_name}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="pro-details-action-wrap">
                                                        <div class="pro-details-add-to-cart">
                                                            <a title="Add to Cart"
                                                               onclick="addToCart({{$item->id}})"
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
                    @empty
                        <div class="text-center">
                            <span class="text-center">Không có sản phẩm nào</span>
                        </div>
                    @endforelse
            </div>
        </div>
        <div id="shop-2" class="tab-pane active">
            @forelse($products as $item)
                <div class="shop-list-wrap mb-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                            <div class="product-list-img">
                                <a href="{{url('/chi-tiet',['slug'=>$item->product_slug])}}">
                                    <img src="{{$item->product_image}}" alt="Product Style">
                                </a>
                                <div class="product-list-quickview">
                                    <button title="Xem Nhanh" data-toggle="modal"
                                            data-target="#product-list-{{$item->id}}"><i
                                            class="icon-eye icons"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                            <div class="shop-list-content">
                                <h3><a href="{{url('/chi-tiet',['slug'=>$item->product_slug])}}">{{$item->product_name}}</a></h3>
                                <div class="pro-list-price">
                                    <span class="new-price">@money($item->product_price)</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="product-list-rating-wrap">
                                    <div class="product-list-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                </div>
                                <p>{!! $item->product_desc !!}</p>
                                <div class="product-list-action">
                                    <button onclick="addToCart({{$item->id}})" title="Thêm Giỏ Hàng"><i
                                            class="icon-basket-loaded"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal modal-quickview fade" id="product-list-{{$item->id}}"
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
                                                <img src="{{$item->product_image}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                            <div class="product-details-content quickview-content">
                                                <h2>{{$item->product_name}}</h2>
                                                <div class="product-ratting-review-wrap">
                                                    <div class="product-review-order">
                                                        <span>242 orders</span>
                                                    </div>
                                                </div>
                                                <p>{!! $item->product_desc !!}</p>
                                                <div class="pro-details-price">
                                                    <span class="new-price">@money($item->product_price)</span>
                                                    <span class="old-price">$95.72</span>
                                                </div>

                                                <div class="pro-details-quality">
                                                    <span>Quantity:</span>
                                                    <div class="cart-plus-minus">
                                                        <form>
                                                            <label>
                                                                <input class="cart-plus-minus-box"
                                                                       type="text"
                                                                       id="qty-{{$item->id}}"
                                                                       min="1" value="1">
                                                            </label>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product-details-meta">
                                                    <ul>
                                                        <li><span>Danh Mục:</span> <a
                                                                href="#">{{$item->category->category_name}}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="pro-details-action-wrap">
                                                    <div class="pro-details-add-to-cart">
                                                        <a title="Add to Cart"
                                                           onclick="addToCart({{$item->id}})"
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
                @empty
                    <div class="text-center">
                        <span>Không có sản phẩm nào</span>
                    </div>
                @endforelse
        </div>
    </div>
    {!! $products->appends(request()->input())->links("vendor.pagination.default") !!}
</div>
