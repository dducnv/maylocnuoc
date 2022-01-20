<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use App\Models\MetaSeo;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Exception;
use App\Models\Slideshow;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
class WebController extends Controller
{
    public function index(){
        $seo = MetaSeo::findOrFail(1);
        $slideshow = Slideshow::where('slideshow_status',0)->get();
        $products = Product::where('product_status',0)->with('Category','Brand')->orderBy('created_at', 'desc')->get();
        $category = Category::where('category_status',0)->withCount("Product")->get();
        $brand = Brand::where('brand_status',0)->get();
        $viewed = [];
        $grandTotal = 0;
        if(Session::has("viewed")){
            $viewed = Session::get("viewed");
        }
        return view('home',[
            'slideshow'=>$slideshow,
            'products'=>$products,
            'brand'=>$brand,
            'category'=>$category,
            'viewed'=>$viewed,
            'seo'=>$seo
        ]);
    }
    public function catalog(Request $request){
        $seo = MetaSeo::findOrFail(1);
        $search = $request->get("p");
        $category = $request->get("cate");
        $cateID = 0;
        $cate = Category::where('category_status',0)->where('category_slug',$category)->first();
        if($cate !== null){
            $cateID = $cate->id;
        }
        $products = Product::where('product_status',0)
            ->search($search)
            ->category($cateID)
            ->with('Category','Brand')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('pages.catalog',[
            'products'=>$products,
            'search_key'=>$search,
             'seo'=>$seo
        ]);
    }
    public function sortSearch(Request $request){
        $category = $request->get("cate");
        $search = $request->get("p");
        $display = $request->get("display");
        $sort = $request->get("sort");
        $cate = Category::where('category_status',0)->where('category_slug',$category)->first();
        $cateID = 0;
        if($cate !== null){
            $cateID = $cate->id;
        }
        $method = null;
        $sortBy = null;
        switch ($sort){
            case "price-asc":
                $method = "asc";
                $sortBy = "product_price";
                break;
            case "price-desc":
                $method = "desc";
                $sortBy = "product_price";
                break;
            case "name-desc":
                $method = "desc";
                $sortBy = "product_name";
                break;
            case "name-asc":
                $method = "asc";
                $sortBy = "product_name";
                break;

        }
        $products = Product::where('product_status',0)
            ->search($search)
            ->category($cateID)
            ->with('Category','Brand')
            ->orderBy($sortBy??"created_at",$method??"desc")
            ->paginate($display);
        return response()->json([
            'products' => view('pages.components.product_res')->with('products',$products)->render(),
            'search_key'=>$search
        ]);}
    public function details_product($slug){
        $viewed = [];
        $prod = [];
        $products = Product::where('product_status',0)->with('Category','Brand')->get();
        $product = Product::where('product_slug',$slug)->where('product_status',0)->with('Category','Brand')->first();
        if(Session::has("viewed")){
            $viewed = Session::get("viewed");
        }
        if(!$this->checkViewed($viewed,$product)){
            $viewed[] = $product;
        }else{
            foreach ($viewed as $key => $item){
                if($item->id == $product->id){
                    unset($viewed[$key]);
                    $viewed[] = $product;
                    break;
                }
            }
        }
        Session::put("viewed",$viewed);

        foreach($products as $item){
            if($item->category_id == $product->category_id && $product->id != $item->id){
                $prod[] = $item->id;
            }
        }
        return view('pages.product_details',[
            'product'=>$product,
            'products'=>$products,
            'count_prod'=>count($prod)
        ]);
    }
    private function checkViewed(array $view,Product $p): bool
    {
        foreach ($view as $item){
            if($item->id == $p->id)
                return true;
        }
        return false;
    }
    public function checkout(){
        $seo = MetaSeo::findOrFail(1);
        if(Session::has("cart")){
            $cart = Session::get("cart");
        }else{
            return redirect()->to('/');
        }
        if($cart !=null){
            return view('pages.checkout',[
                'seo'=>$seo
            ]);
        }
        return redirect()->to('/');
    }
    public function contacts(){
        $seo = MetaSeo::findOrFail(1);
        return view('pages.contacts',[
            'seo'=>$seo
        ]);
    }
    public function confirm(){
        $seo = MetaSeo::findOrFail(1);
        $order_completed ="";
        if(Session::has("orderCompleted")){
            $order_completed = Session::get("orderCompleted");
        }
        if($order_completed=="success"){
            return view('pages.confirm',[
                'seo'=>$seo
            ]);
        }
        return redirect()->to(404);
    }
    public function checkoutSave(Request $request){
        if(!Session::has("cart")){
            return redirect()->to('/');
        }
        $cart = Session::get("cart");
        $validator = Validator::make($request->all(), [
            "fullName" =>["required"],
            "phoneNumber" =>["required","numeric","regex:/([\+84|84|0]+(3|5|7|8|9|1[2|6|8|9]))+([0-9]{8})\b/"] ,
            "email" => ["required","email"],
            "address" => "required",
        ], [
            "fullName.required" => "Hãy nhập tên.",
            "phoneNumber.required" => "Hãy nhập số điện thoại.",
            "phoneNumber.numeric" => "Số điện thoại không được chứa ký tự đặc biệt.",
            "phoneNumber.regex" => "'".$request->get("phoneNumber")."' Đây không phải số điện thoại.",
            "email.required" => "Hãy nhập email.",
            "email.email" =>"'".$request->get("email")."' Đây Không Phải Email.",
            "address.required" => "Hãy nhập địa chỉ.",
        ]);
        if ($validator->passes()) {
            try{
                $grandTotal = 0;
                $mail = $request->get("email");
                foreach ($cart as $item){
                    $grandTotal += $item->cart_qty * $item->product_price;
                }
                $cus = Customer::create([
                    "cus_name"=>$request->get("fullName"),
                    "cus_email"=>$request->get("email"),
                    "cus_tel"=>$request->get("phoneNumber"),
                    "cus_address"=>$request->get("address"),
                ]);
                $order = Order::create([
                    "cus_id"=>$cus->id,
                    "grand_total"=>$grandTotal,
                    "message"=>$request->get("message"),
                ]);
                foreach ($cart as $item){
                    OrderDetails::create([
                        "order_id"=>$order->id,
                        "product_id"=>$item->id,
                        "qty"=>$item->cart_qty,
                        "product_price"=>$item->cart_qty,
                    ]);
                }
                $orderId = $order->id;
                Mail::send('pages.mail.mail_order', [
                    'customer' => $cus,
                    'cart'=>$cart,
                    'order'=> $order,
                ], function ($message) use ($mail,$orderId) {
                    $message->to($mail)->subject('Đơn Hàng - #'.$orderId);
                    $message->from($mail, 'HABECOM');
                });
                $order_completed = "success";
                if(Session::has("orderCompleted")){
                    $order_completed = Session::get("orderCompleted");
                }
                Session::put("orderCompleted",$order_completed);
                Session::forget("cart");// Session::put("cart",null);
            }catch (Exception $e){
                dd($e);
            }
            return redirect()->to('/');
        }else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }
    }
}
