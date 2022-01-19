@if($cart != null)
<ul>

        @foreach($cart as $item)
            <li class="single-product-cart">
                <div class="cart-img">
                    <a href="#"><img src="{{$item->product_image}}" alt=""></a>
                </div>
                <div class="cart-title">
                    <h4><a href="#">{{$item->product_name}}</a></h4>
                    <span>{{$item->product_prime += $item->cart_qty}}</span>
                </div>
                <div class="cart-delete">
                    <a href="#">×</a>
                </div>
            </li>
        @endforeach

</ul>
<div class="cart-total">
    <h4>Subtotal: <span>{{$grandTotal}}</span></h4>
</div>
@endif
