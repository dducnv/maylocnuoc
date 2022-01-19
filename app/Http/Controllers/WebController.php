<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slideshow;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class WebController extends Controller
{
    //
    public function index(){
        $slideshow = Slideshow::where('slideshow_status',0)->get();
        $products = Product::where('product_status',0)->with('Category','Brand')->orderBy('created_at', 'desc')->get();
        $category = Category::where('category_status',0)->withCount("Product")->get();
        $brand = Brand::where('brand_status',0)->get();
        $cate = [];
        return view('home',[
            'slideshow'=>$slideshow,
            'products'=>$products,
            'brand'=>$brand,
            'category'=>$category
        ]);
    }

    public function catalog(){

        return view('pages.catalog');
    }

    public function details_product(){
        return view('pages.product');
    }

    public function cart(){
        return view('pages.cart');
    }
    public function checkout(){
        return view('pages.checkout');
    }
    public function contacts(){
        return view('pages.contacts');
    }


}
