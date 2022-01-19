<div class="row">

    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
        <form action="#">
            <div class="table-content table-responsive cart-table-content">
                <table>
                    <thead class="thead-cart">
                    <tr>
                        <th>Ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá Tiền</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Xoá Sản Phẩm</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($cart as $item)
                        <tr>
                            <td class="product-thumbnail">
                                <a href="#"><img src="{{$item->product_image}}" alt=""></a>
                            </td>
                            <td class="product-name"><a href="#">{{$item->product_name}}</a></td>
                            <td class="product-price-cart"><span class="amount">@money($item->product_price)</span></td>
                            <td class="product-quantity pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                </div>
                            </td>
                            <td class="product-subtotal">@money($item->product_price)</td>
                            <td class="product-remove">
                                <a href="javascript:void(0)" onclick="removeCartItem({{$item->id}})"><i class="icon_close"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-left px-4"> Giỏ Hàng Chưa Có Sản Phẩm Nào.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-shiping-update-wrapper">
                        <div class="cart-shiping-update">
                            <a href="#">Tiếp Tục Mua Hàng</a>
                        </div>
                        <div class="cart-clear">
                            @if($cart != null)
                                <button>Cập Nhật Số Lượng</button>
                                <a onclick="removeAllCart()" href="javascript:void(0)">Xoá Tất Cả</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 col-12">

        <div class="grand-totall">
            <div class="title-wrap">
                <h4 class="cart-bottom-title section-bg-gary-cart">Tổng Tiền</h4>
            </div>
            <h4 class="grand-totall-title">{{$cart_qty}} Sản Phẩm  <span>@money($grandTotal)</span></h4>
            <a href="{{asset('/thanh-toan')}}">Thanh Toán</a>
        </div>
    </div>
</div>
