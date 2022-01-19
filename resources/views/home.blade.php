@extends('layout')
@section('main')
    <section class="container">
        <!-- Slider -->
        <div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    @foreach ($slideshow as $item)
                        <li>
                            <img src="{{ $item->image }}" alt="{{ $item->title }}">
                            {{--  --}}{{-- <div class="fr-slider-cont"> --}}
                            {{-- <h3>{{$item->title}}</h3> --}}
                            {{-- <p>{{$item->title}}</p> --}}
                            {{-- <p class="fr-slider-more-wrap"> --}}
                            {{-- <a class="fr-slider-more" href="#">View collection</a> --}}
                            {{-- </p> --}}
                            {{-- </div> --}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <section class="fr-pop-wrap">

            <h3 class="component-ttl"><span>Sản Phẩm Đã Xem</span></h3>


            <div class="fr-pop-tab-cont">

                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">

                    <ul class="slides">
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .fr-pop-tab-cont -->
        </section>
        <div class="product-catagory-section section-top-gap-100 mb-4">
            <h3 class="component-ttl mb-3"><span>Danh Mục Chính</span></h3>
            <!-- Start Catagory Wrapper -->
            <div class="product-catagory-wrapper mb-3">
                <div class="row">
                    @foreach ($category as $item)
                        @if($item->parent_id == 0 && $item->product_count > 0)
                            <div class="col-lg-3 col-md-3 col-sm-3 px-2 col-6">
                                <!-- Start Product Catagory Single -->
                                <a href="product-details-default.html" class="product-catagory-single rounded-pill ">
                                    <img class="product-catagory-img"
                                         src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                         alt="{{$item->category_name}}">
                                    <div class="product-catagory-content">
                                        <h5 class="product-catagory-title">{{$item->category_name}}</h5>
                                        <span class="product-catagory-items">({{$item->product_count}} Sản Phẩm)</span>
                                    </div>
                                </a> <!-- End Product Catagory Single -->
                            </div>
                        @endif
                    @endforeach
                </div>
            </div> <!-- End Catagory Wrapper -->
        </div>
        <div class="discounts-wrap">
            <h3 class="component-ttl my-3"><span>Thương Hiệu</span></h3>
            <div class="flexslider discounts-list">
                <ul class="slides">
                    @foreach($brand as $item)
                        <li class="discounts-i">
                            <a href="product.html" class="discounts-i-img">
                                <img src="{{$item->brand_logo}}" alt="{{$item->brand_name}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="discounts-info">
                <p>Special offer!<br>Limited time only</p>
                <a href="">Shop now</a>
            </div>
        </div>
        <div class="fr-pop-wrap">

            <h3 class="component-ttl"><span>Sản Phẩm Khuyến Mãi</span></h3>


            <div class="fr-pop-tab-cont">

                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">

                    <ul class="slides">
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.html" class="product-default-img-link">
                                        <img
                                            src="https://res.cloudinary.com/dduc7th-dec/image/upload/v1635783423/Thumbnail/ab67616d0000b273c98af859e9b24d3a6c1c72bb_voxmhj.jpg"
                                            alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="fas fa-cart-plus"></i></a></li>
                                            <li><a href="wishlist.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content text-center">
                                    <h6 class="product-default-link "><a href="product-details-default.html">New Balance
                                            Fresh Foam Kaymin Car Purts</a></h6>
                                    <span class="product-default-price"><del
                                            class="product-default-price-off">$30.12</del> $25.12</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .fr-pop-tab-cont -->
        </div>
        <div class="py-2 border-1 bg_main-color">
            <h2 class="text-center text-white fw-normal">Sản Phẩm Theo Danh Mục</h2>
        </div>
        <div class="row">
            @foreach($category as $cate_item)
                @if($cate_item->product_count >0)
                    <div class="d-flex justify-content-between mt-3 align-items-center">
                        <h3 class="component-ttl "><span>{{$cate_item->category_name}}</span></h3>
                        <a class="" href="#">Xem Thêm</a>
                    </div>
                    @foreach($products as $item)
                        @if($item->category_id == $cate_item->id)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                                <div class="product-default-single ">
                                    <div class="product-img-warp">
                                        <a href="" class="product-default-img-link">
                                            <img src="{{$item->product_image}}"
                                                 alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a title="Thêm Giỏ Hàng" href="#"><i
                                                            class="fas fa-cart-plus"></i></a></li>
                                                <li><a title="Xem Nhanh" href="javascript:void(0)"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#modalQuickview-{{$item->id}}"><i
                                                            class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content text-center">
                                        <h6 class="product-default-link "><a href="">{{$item->product_name}}</a></h6>
                                        <span class="product-default-price text-danger">
                                <del class="product-default-price-off">$30.12</del>
                                {{$item->product_price}}
                            </span>
                                    </div>
                                </div>
                                <div class="modal fade" id="modalQuickview-{{$item->id}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl  modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="product-details-gallery-area">
                                                                @php
                                                                    $images = explode(",",$item->product_gallery)
                                                                @endphp
                                                                @if(count($images)!=1)
                                                                    <div
                                                                        class="product-large-image modal-product-image-large">
                                                                        @foreach($images as $image)
                                                                            <div class="product-image-large-single">
                                                                                <img class="img-fluid" src="{{$image}}"
                                                                                     alt="">
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                @else
                                                                    <div class="product-image-large-single">
                                                                        <img class="img-fluid"
                                                                             src="{{$item->product_gallery}}" alt="">
                                                                    </div>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="product-details-content-area">
                                                                <!-- Start  Product Details Text Area-->
                                                                <div class="product-details-text">
                                                                    <h4 class="title">{{$item->product_name}}</h4>
                                                                    <div class="price">
                                                                        <del>$70.00</del>{{$item->product_price}}</div>
                                                                    <p>{!! $item->product_desc !!}</p>
                                                                </div> <!-- End  Product Details Text Area-->
                                                                <!-- Start Product Variable Area -->
                                                                <div class="product-details-variable">
                                                                    <!-- Product Variable Single Item -->
                                                                    <div class="variable-single-item ">
                                                                        <span>Quantity</span>
                                                                        <div class="product-variable-quantity">
                                                                            <input min="1" max="100" value="1"
                                                                                   type="number">
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- End Product Variable Area -->
                                                                <!-- Start  Product Details Meta Area-->
                                                                <div class="product-details-meta mb-20">
                                                                    <ul>
                                                                        <li><a href=""><i class="icon-heart"></i>Add to
                                                                                wishlist</a></li>
                                                                        <li><a href=""><i class="icon-repeat"></i>Compare</a>
                                                                        </li>
                                                                        <li><a href="#" data-toggle="modal"
                                                                               data-target="#modalQuickview"><i
                                                                                    class="icon-shopping-cart"></i>Add
                                                                                To Cart</a></li>
                                                                    </ul>
                                                                </div> <!-- End  Product Details Meta Area-->
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
                    <hr/>
                @endif

            @endforeach
        </div>
    </section>
@endsection
