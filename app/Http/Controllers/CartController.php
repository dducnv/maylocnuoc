<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add_to_cart(Request $request,$id){
        $cart = [];
        $qty = $request->get("qty");
        $product = Product::findOrFail($id);
        if(Session::has("cart")){
            $cart = Session::get("cart");
        }
        if(!$this->checkCart($cart,$product)){
            $product->cart_qty = $qty;
            $cart[] = $product;
        }else{
            for ($i=0;$i<count($cart);$i++){
                if($cart[$i]->id==$product->id){
                    $cart[$i]->cart_qty = $cart[$i]->cart_qty+$qty;
                    break;
                }
            }
        }
        Session::put("cart",$cart);
        return response()->json([
            'cart_head' => view('pages.components.cart_head')->render(),
            'cart_qty'=>view('pages.components.cart_qty')->render(),
            'cart_page'=>view('pages.components.cart_page')->render(),
        ]);
    }
    private function checkCart(array $cart,Product $p): bool
    {
        foreach ($cart as $item){
            if($item->id == $p->id)
                return true;
        }
        return false;
    }
    public function removeItemCart($id){
        if(Session::has("cart")){
            $cart = Session::get("cart");
            foreach ($cart as $key => $item){
                if($item->id == $id){
                    unset($cart[$key]);
                }
            }
            Session::put("cart",$cart);
        }
        return response()->json([
            'cart_head' => view('pages.components.cart_head')->render(),
            'cart_qty'=>view('pages.components.cart_qty')->render(),
            'cart_page'=>view('pages.components.cart_page')->render(),
        ]);
    }
    public function removeAllCart(){
        if(Session::has("cart")) {
            Session::forget("cart");
        }
        return response()->json([
            'cart_head' => view('pages.components.cart_head')->render(),
            'cart_qty'=>view('pages.components.cart_qty')->render(),
            'cart_page'=>view('pages.components.cart_page')->render(),
        ]);
    }
    public function cart(){
        $cart = [];
        $grandTotal = 0;
        if(Session::has("cart"))
            $cart = Session::get("cart");
        foreach ($cart as $item){
            $grandTotal += $item->cart_qty * $item->price;
        }
//        dd($cart);
//        Session::forget("cart");
//        return redirect()->back();
        return view('pages.cart',["cart"=>$cart,"grandTotal"=>$grandTotal]);
    }
}
