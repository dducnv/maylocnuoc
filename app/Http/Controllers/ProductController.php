<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //

    public function all_product(){
        $products = Product::orderBy('id','desc')->paginate(5);

        return view('admin.pages.product.all_product',[
            'products'=>$products,

        ]);

    }
    public function add_product(){
        $categories = Category::where('category_status',0)->get();
        $brand = Brand::where('brand_status',0)->get();
        return view('admin.pages.product.add_product',[
            'categories'=>$categories,
            'brand'=>$brand
            ]);
    }
    public function edit_product($id){
        $product = Product::findOrFail($id);
        $categories = Category::where('category_status',0)->get();
        $brand = Brand::where('brand_status',0)->get();
        return view('admin.pages.product.edit_product',[
            'categories'=>$categories,
            'brand'=>$brand,
            'product'=>$product
        ]);
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save_product(Request $request)
    {
//        dd($request->all());
        $validator = Validator::make($request->all(), [
            "product-name" => "required",
            "thumbnail" => "required",
            "product-gallery" => "required",
            "product_slug" => ["required", "unique:products", "alpha_dash"],
            "product-keywords" => "required",
            "product-price" => ["required", "min:0", "numeric"],
            "product-category" => "required",
            "product-brand" => "required",
            "product-desc" => "required",
            "product-specification" => "required",
            "product-content" => "required"
        ], [
            "product-name.required" => "Hãy nhập tên sản phẩm",
            "product-image.required" => "Hãy chọn ảnh sản phẩm",
            "product-gallery.required" => "Hãy chọn ảnh sản mô tả sản phẩm",
            "product_slug.required" => "Hãy nhập slug",
            "product_slug.unique" => "Slug đã tồn tại",
            "product_slug.alpha_dash" => "Slug không chứa các ký tự đặc biệt ( ngoại trừ '-') và dấu cách",
            "product-keywords.required" => "Hãy nhập từ khóa",
            "product-price.required" => "Hãy nhập giá sản phẩm",
            "product-price.min" => "Giá sản phẩm phải lớn hơn hoặc bằng 0",
            "product-price.numeric" => "Giá sản phẩm không được chứa các ký tự hoặc chữ",
            "product-category.required" => "Hãy chọn danh mục",
            "product-brand.required" => "Hãy chọn nhãn hiệu",
            "product-desc.required" => "Hãy nhập mô tả sản phẩm",
            "product-specification.required" => "Hãy nhập thông số sản phẩm",
            "product-content.required" => "Hãy nhập mô tả sản phẩm",
        ]);
//        dd($request->all());
        if ($validator->fails()) {
            Toastr::error('Lỗi Dữ Liệu Nhập Lại ¯\_(ツ)_/¯', 'Thông Báo', ["positionClass" => "toast-top-right"]);
            $validator->validate(
                [
                    "product-name.required"=>"Hãy nhập tên sản phẩm",
                    "thumbnail.required"=>"Hãy chọn ảnh sản phẩm",
                    "product-gallery.required"=>"Hãy chọn ảnh sản mô tả sản phẩm",
                    "product_slug.required"=>"Hãy nhập slug",
                    "product_slug.unique"=>"Slug đã tồn tại",
                    "product_slug.alpha_dash"=>"Slug không chứa các ký tự đặc biệt ( ngoại trừ '-') và dấu cách",
                    "product-keywords.required"=>"Hãy nhập từ khóa",
                    "product-price.required"=>"Hãy nhập giá sản phẩm",
                    "product-price.min"=>"Giá sản phẩm phải lớn hơn hoặc bằng 0",
                    "product-price.numeric"=>"Giá sản phẩm không được chứa các ký tự hoặc chữ",
                    "product-category.required"=>"Hãy chọn danh mục",
                    "product-brand.required"=>"Hãy chọn nhãn hiệu",
                    "product-desc.required"=>"Hãy nhập mô tả sản phẩm",
                    "product-specification.required" => "Hãy nhập thông số sản phẩm",
                    "product-content.required"=>"Hãy nhập mô tả sản phẩm",
                ]
            );
        }

            if($request ->has('product-status')){
                $status = 0;
            }else{
                $status = 1;
            }
//            dd($request->all());
            try{
                Product::create([
                    'product_name'=>$request->get('product-name'),
                    'product_image'=>$request->get('thumbnail'),
                    'product_gallery'=>$request->get('product-gallery'),
                    'product_slug'=>$request->get('product_slug'),
                    'product_tags'=>$request->get('product-keywords'),
                    'product_price'=>$request->get('product-price'),
                    'product_desc'=>$request->get('product-desc'),
                    'product_content'=>$request->get('product-content'),
                    'product_specification'=>$request->get('product-specification'),
                    'product_status'=>$status,
                    'category_id'=>$request->get('product-category'),
                    'brand_id'=>$request->get('product-brand'),
                ]);
                Toastr::success('Thêm sản phẩm thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
                return redirect()->to('/admin/san-pham') ;
            }catch(\Exception $e){
                Toastr::error('Lỗi hệ thống =))', 'Thông báo', ["positionClass" => "toast-top-right"]) ;
                return  redirect()->to('/admin/san-pham');
            }
    }

    public function update_product(Request $request,$id)
    {
//        dd($request->all());
        $validator = Validator::make($request->all(), [
            "product-name" => "required",
            "thumbnail" => "required",
            "product-gallery" => "required",
            "product_slug" => ["required", "alpha_dash"],
            "product-keywords" => "required",
            "product-price" => ["required", "min:0", "numeric"],
            "product-category" => "required",
            "product-brand" => "required",
            "product-desc" => "required",
            "product-specification" => "required",
            "product-content" => "required"

        ], [
            "product-name.required" => "Hãy nhập tên sản phẩm",
            "product-image.required" => "Hãy chọn ảnh sản phẩm",
            "product-gallery.required" => "Hãy chọn ảnh sản mô tả sản phẩm",
            "product_slug.required" => "Hãy nhập slug",
            "product_slug.alpha_dash" => "Slug không chứa các ký tự đặc biệt ( ngoại trừ '-') và dấu cách",
            "product-keywords.required" => "Hãy nhập từ khóa",
            "product-price.required" => "Hãy nhập giá sản phẩm",
            "product-price.min" => "Giá sản phẩm phải lớn hơn hoặc bằng 0",
            "product-price.numeric" => "Giá sản phẩm không được chứa các ký tự hoặc chữ",
            "product-category.required" => "Hãy chọn danh mục",
            "product-brand.required" => "Hãy chọn nhãn hiệu",
            "product-desc.required" => "Hãy nhập mô tả sản phẩm",
            "product-content.required" => "Hãy nhập mô tả sản phẩm",
            "product-specification.required" => "Hãy nhập thông số sản phẩm",
        ]);
//        dd($request->all());
        if ($validator->fails()) {
            Toastr::error('Lỗi Dữ Liệu Nhập Lại ¯\_(ツ)_/¯', 'Thông Báo', ["positionClass" => "toast-top-right"]);
            $validator->validate(
                [
                    "product-name.required"=>"Hãy nhập tên sản phẩm",
                    "thumbnail.required"=>"Hãy chọn ảnh sản phẩm",
                    "product-gallery.required"=>"Hãy chọn ảnh sản mô tả sản phẩm",
                    "product_slug.required"=>"Hãy nhập slug",
                    "product_slug.alpha_dash"=>"Slug không chứa các ký tự đặc biệt ( ngoại trừ '-') và dấu cách",
                    "product-keywords.required"=>"Hãy nhập từ khóa",
                    "product-price.required"=>"Hãy nhập giá sản phẩm",
                    "product-price.min"=>"Giá sản phẩm phải lớn hơn hoặc bằng 0",
                    "product-price.numeric"=>"Giá sản phẩm không được chứa các ký tự hoặc chữ",
                    "product-category.required"=>"Hãy chọn danh mục",
                    "product-brand.required"=>"Hãy chọn nhãn hiệu",
                    "product-desc.required"=>"Hãy nhập mô tả sản phẩm",
                    "product-content.required"=>"Hãy nhập mô tả sản phẩm",
                    "product-specification.required" => "Hãy nhập thông số sản phẩm",
                ]
            );
        }

            if($request ->has('product-status')){
                $status = 0;
            }else{
                $status = 1;
            }

            $product = Product::findOrFail($id);
//            dd($request->all());
            try{
                $product->update([
                    'product_name'=>$request->get('product-name'),
                    'product_image'=>$request->get('thumbnail'),
                    'product_gallery'=>$request->get('product-gallery'),
                    'product_slug'=>$request->get('product_slug'),
                    'product_tags'=>$request->get('product-keywords'),
                    'product_price'=>$request->get('product-price'),
                    'product_desc'=>$request->get('product-desc'),
                    'product_specification'=>$request->get('product-specification'),
                    'product_content'=>$request->get('product-content'),
                    'product_status'=>$status,
                    'category_id'=>$request->get('product-category'),
                    'brand_id'=>$request->get('product-brand'),
                ]);
                Toastr::success('Cập nhật phẩm thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
                return redirect()->to('/admin/san-pham') ;
            }catch(\Exception $e){
                Toastr::error('Lỗi hệ thống =))', 'Thông báo', ["positionClass" => "toast-top-right"]) ;
                return  redirect()->to('/admin/san-pham');
            }
    }

    public function delete_product($id){
        $product = Product::findOrFail($id);
        $product -> delete();
    }


    public function product_status($id){
        $product = Product::findOrFail($id);
        if($product->product_status == 0){
            $status = 1;
            Toastr::warning('Đã Ẩn '.$product->product_name, 'Trạng Thái', ["positionClass" => "toast-top-right"]);

        }else{
            $status = 0;
            Toastr::success('Đã Hiển Thị '.$product->product_name, 'Trạng Thái', ["positionClass" => "toast-top-right"]);

        }

        try{
        $product -> update([
            'product_status'=>$status,
        ]);
        }catch(\Exception $e){
            return redirect()->to('/admin/san-pham');
            Toastr::error('Lỗi Hệ Thống Gọi Đức ¯\_(ツ)_/¯', 'Title', ["positionClass" => "toast-top-right"]);
        }
    }

}
