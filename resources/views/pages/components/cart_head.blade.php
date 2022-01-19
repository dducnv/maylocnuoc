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
    <a class="btn-hover cart-btn-style"  href="{{asset('/gio-hang')}}">Xem Giỏ Hàng</a>
    @if(count($cart) !=0)
        <a class="no-mrg btn-hover cart-btn-style" href="{{asset('/thanh-toan')}}">Thanh Toán</a>
    @endif
</div>
