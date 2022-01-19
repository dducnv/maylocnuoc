<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    //
    public function all_category(){
        $categories = Category::orderBy("id","desc")->paginate('8');
        $category_parent = Category::all();
        return view('admin.pages.category.category',[
            'categories'=>$categories,
            'category_parent'=>$category_parent

        ]);
//        dd($category);
    }


    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save_category(Request $request){
        $validator =Validator::make( $request->all(),[
            "category_name"=>"required",
            "category_keyw"=>"required",
            "category_slug"=>['required','unique:categories'],
            "category_desc"=>"required",
        ],[
                    "category_name.required"=>"Vui lòng nhập tên danh mục",
                    "category_keyw.required"=>"Vui Lòng nhập từ khóa",
                    "category_slug.required"=>"Vui lòng nhập slug",
                    "category_slug.unique"=>"Slug đã tồn tại",
                    "category_desc.required"=>"Vui lòng mô tả danh mục",
        ]);

        if ($validator->fails()) {

            Toastr::error('Lỗi Dữ Liệu Nhập Lại ¯\_(ツ)_/¯', 'Thông Báo', ["positionClass" => "toast-top-right"]);
            $validator->validate(
                [
                    "category_name.required"=>"Vui lòng nhập tên danh mục",
                    "category_keyw.required"=>"Vui Lòng nhập từ khóa",
                    "category_slug.required"=>"Vui lòng nhập slug",
                    "category_slug.unique"=>"Slug đã tồn tại",
                    "category_desc.required"=>"Vui lòng mô tả danh mục",
                ]
            );
        }

        if($request ->has('status')){
            $status = 0;
        }else{
            $status = 1;
        }

        try{
            Category::create([
                'category_name'=>$request->get('category_name'),
                'meta_keywords'=>$request->get('category_keyw'),
                'category_slug'=>$request->get('category_slug'),
                'parent_id'=>$request->get('parent_category'),
                'category_desc'=>$request->get('category_desc'),
                'category_status'=> $status,
            ]);
            Toastr::success('Thêm Danh Mục Thành Công', 'Title', ["positionClass" => "toast-top-right"]);
            return redirect()->to('/admin/danh-muc');
        }catch(\Exception $e){
            return redirect()->to('/admin/danh-muc');
            Toastr::error('Lỗi Dữ Liệu Gọi Đức ¯\_(ツ)_/¯', 'Title', ["positionClass" => "toast-top-right"]);
        }
        // dd($request->all());

    }


    /**
     * @throws \Illuminate\Validation\ValidationException
     */



    public function update_category(Request $request,$id)
    {
//        dd($request->all());

        $validator =Validator::make( $request->all(),[
            "category_name"=>"required",
            "category_keyw"=>"required",
            "category_slug"=>['required'],
            "category_desc"=>"required",
        ],[
            "category_name.required"=>"Vui lòng nhập tên danh mục",
            "category_keyw.required"=>"Vui Lòng nhập từ khóa",
            "category_slug.required"=>"Vui lòng nhập slug",
            "category_desc.required"=>"Vui lòng mô tả danh mục",
        ]);
        if ($validator->fails()) {
            Toastr::error('Lỗi Dữ Liệu Nhập Lại ¯\_(ツ)_/¯', 'Thông Báo', ["positionClass" => "toast-top-right"]);
            $validator->validate(
                [
                    "category_name.required"=>"Vui lòng nhập tên danh mục",
                    "category_keyw.required"=>"Vui Lòng nhập từ khóa",
                    "category_slug.required"=>"Vui lòng nhập slug",
                    "category_desc.required"=>"Vui lòng mô tả danh mục",
                ]
            );
        }
        if($request ->has('status')){
            $status = 0;
        }else{
            $status = 1;
        }
        $category = Category::findOrFail($id);
        try{
            $category->update([
                'category_name'=>$request->get('category_name'),
                'meta_keywords'=>$request->get('category_keyw'),
                'category_slug'=>$request->get('category_slug'),
                'category_desc'=>$request->get('category_desc'),
                'parent_id'=>$request->get('parent_category'),
                'category_status'=> $status,
            ]);
            Toastr::success('Cập Nhật Danh Mục Thành Công', 'Thông Báo', ["positionClass" => "toast-top-right"]);
            return redirect()->to('/admin/danh-muc');
        }catch(\Exception $e){
            return redirect()->to('/admin/danh-muc');
            Toastr::error('Lỗi Hệ Thống Gọi Đức ¯\_(ツ)_/¯', 'Title', ["positionClass" => "toast-top-right"]);
        }



    }
    public function delete_category($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

    }
    public function category_status($id){
        $category = Category::findOrFail($id);
        if($category->category_status == 0){
            $status = 1;
            Toastr::warning('Đã Ẩn '.$category->category_name, 'Trạng Thái', ["positionClass" => "toast-top-right"]);

        }else{
            $status = 0;
            Toastr::success('Đã Hiển Thị '.$category->category_name, 'Trạng Thái', ["positionClass" => "toast-top-right"]);

        }
        try{
        $category->update([
            'category_status'=> $status
        ]);
        }catch(\Exception $e){
            return redirect()->to('/admin/danh-muc');
            Toastr::error('Lỗi Hệ Thống Gọi Đức ¯\_(ツ)_/¯', 'Title', ["positionClass" => "toast-top-right"]);
        }
    }

}
