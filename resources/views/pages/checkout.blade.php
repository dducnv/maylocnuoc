@extends('layout')
{{--meta seo--}}
@section("page_title","Thanh Toán")
@section("meta_desc","$seo->meta_desc")
@section("meta_keywords","$seo->meta_keywords")
@section("meta_image","$seo->meta_image")
{{--.meta seo--}}
@section('main')
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Trang Chủ</a>
                    </li>
                    <li class="active">Thanh Toán</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="checkout-main-area pt-100 pb-120">
        {{ csrf_field() }}
        <div class="container">
            <div class="checkout-wrap pt-30">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="billing-info-wrap mr-50">
                            <h3>CHI TIẾT HÓA ĐƠN</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-danger print-error-msg" style="display:none">
                                        <ul></ul>
                                    </div>
                                    <div class="billing-info mb-20">
                                        <label for="fullName">Họ Và Tên<abbr class="required" title="required"> (Bắt Buộc)</abbr></label>
                                        <input id="fullName" placeholder="Nguyễn Văn A" name="fullName" type="text"></div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-20">
                                        <label for="phoneNumber">Số Điện Thoại <abbr class="required" title="required"> (Bắt Buộc)</abbr></label>
                                        <input id="phoneNumber" placeholder="+84" name="phoneNumber" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-20">
                                        <label for="emailAddress">Địa Chỉ E-Mail<abbr class="required" title="required"> (Bắt Buộc)</abbr></label>
                                        <input name="emailAddress" id="emailAddress" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-20">
                                        <label for="Address">Địa Chỉ<abbr class="required" title="required"> (Bắt Buộc)</abbr></label>
                                        <input name="Address" id="Address" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="additional-info-wrap">
                                <label for="noteCheckout">Ghi chú đơn hàng (Không Bắt Buộc)</label>
                                <textarea id="noteCheckout" placeholder="Lưu ý với người bán." name="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="your-order-area">
                            <h3>ĐƠN HÀNG CỦA BẠN</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-info-wrap">
                                    <div class="your-order-info">
                                        <ul>
                                            <li>Sản Phẩm <span>Tổng Tiền</span></li>
                                        </ul>
                                    </div>
                                    <div class="your-order-middle">
                                        <ul>
                                            @if($cart)
                                                @foreach($cart as $item)
                                                    <li>{{$item->product_name}} x {{$item->cart_qty}} <span>@money($item->cart_qty * $item->product_price)</span></li>
                                                @endforeach
                                            @endif

                                        </ul>
                                    </div>

                                    <div class="your-order-info order-shipping">
                                        <ul>
                                            <li>Phí Giao Hàng: <p class="text-danger">Miễn Phí</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="your-order-info order-total">
                                        <ul>
                                            <li>Thanh Toán: <span>@money($grandTotal)</span></li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="payment-method">
                                    <div class="pay-top sin-payment">
                                        <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
                                        <label for="payment_method_1">Thanh Toán Khi Nhận Hàng</label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-2" class="input-radio" type="radio" value="cheque" name="payment_method">
                                        <label for="payment-method-2">Chuyển Khoản</label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="Place-order">
                                <a href="javascript:void(0)" onclick="checkOut()">Hoàn Tất Đơn Hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
