<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Brian2694\Toastr\Facades\Toastr;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    //
    public function all_brand(){
        $brands = Brand::all();
        return view('admin.pages.brand.brand',[
            'brands'=>$brands
        ]);
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save_brand(Request $request){
//        dd($request->all());
        $validator = Validator::make($request->all(),[
           "brand-logo"=>"required",
           "name-brand"=>"required",
           "brand_slug"=>["required","unique:brands"],
        ],[
            "brand-logo.required"=>"Vui lòng chọn logo cho nhãn hiệu",
            "name-brand.required"=>"Vui lòng nhập tên nhãn hiệu",
            "brand_slug.required"=>"Vui lòng nhập slug",
            "brand_slug.unique"=>"Slug đã tồn tại",
        ]);

        if($validator->fails()){
            Toastr::error('Lỗi Dữ Liệu ¯\_(ツ)_/¯', 'Thông báo', ["positionClass" => "toast-top-right"]);
            $validator->validate([
                "brand-logo.required"=>"Vui lòng chọn logo cho nhãn hiệu",
                "name-brand.required"=>"Vui lòng nhập tên nhãn hiệu",
                "brand_slug.required"=>"Vui lòng nhập slug",
                "slug-brand.unique"=>"Slug đã tồn tại",
            ]);
        }
//        dd($request->all());
        if($request ->has('brand-status')){
            $status = 0;
        }else{
            $status = 1;
        }
        try{
            $logo = Cloudinary::upload($request->file('brand-logo')->getRealPath(), [
                'folder' =>'nhanhieu/'.$request->get('brand_slug'),
            ])->getSecurePath();
            Brand::create([
                'brand_logo'=>$logo,
                'brand_name'=>$request->get('name-brand'),
                'brand_slug'=>$request->get('brand_slug'),
                'brand_status'=>$status,
            ]);
            Toastr::success('Thêm nhãn hiệu thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->to('/admin/nhan-hieu');
        }catch (\Exception $e){
            return redirect()->to('/admin/nhan-hieu');
            Toastr::error('Lỗi Hệ Thống Gọi Đức ¯\_(ツ)_/¯', 'Thông báo', ["positionClass" => "toast-top-right"]);
        }

    }
    public function update_brand(Request $request,$id){
        //        dd($request->all());
        $validator = Validator::make($request->all(),[
            "brand-logo-update"=>"required",
            "name-brand-update"=>"required",
            "brand-slug-update"=>["required"],
        ],[
            "brand-logo-update.required"=>"Vui lòng chọn logo cho nhãn hiệu",
            "name-brand-update.required"=>"Vui lòng nhập tên nhãn hiệu",
            "brand-slug-update.required"=>"Vui lòng nhập slug",
        ]);

        if($validator->fails()){
            Toastr::error('Lỗi Dữ Liệu Nhập Lại ¯\_(ツ)_/¯', 'Thông Báo', ["positionClass" => "toast-top-right"]);
            $validator->validate([
                "brand-logo-update.required"=>"Vui lòng chọn logo cho nhãn hiệu",
                "name-brand-update.required"=>"Vui lòng nhập tên nhãn hiệu",
                "brand-slug-update.required"=>"Vui lòng nhập slug",
            ]);
        }
//        dd($request->all());
        if($request ->has('brand-status-update')){
            $status = 0;
        }else{
            $status = 1;
        }

        $brands = Brand::findOrFail($id);
        try{
            $brands->update([
                'brand_logo'=>$request->get('brand-logo-update'),
                'brand_name'=>$request->get('name-brand-update'),
                'brand_slug'=>$request->get('brand-slug-update'),
                'brand_status'=>$status,
            ]);
            Toastr::success('Cập nhật thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->to('/admin/nhan-hieu');
        }catch (\Exception $e){
            return redirect()->to('/admin/nhan-hieu');
            Toastr::error('Lỗi Hệ Thống Gọi Đức ¯\_(ツ)_/¯', 'Thông báo', ["positionClass" => "toast-top-right"]);
        }
    }
    public function delete_brand($id){
        $brand = Brand::findOrFail($id);
        $brand->delete();
    }

    public function brand_status($id){
        $brand = Brand::findOrFail($id);
        if($brand->brand_status == 0){
            $status = 1;
            Toastr::warning('Đã Ẩn '.$brand->brand_name, 'Trạng Thái', ["positionClass" => "toast-top-right"]);

        }else{
            $status = 0;
            Toastr::success('Đã Hiển Thị '.$brand->brand_name, 'Trạng Thái', ["positionClass" => "toast-top-right"]);

        }
        try{
            $brand->update([
                'brand_status'=> $status
            ]);
        }catch(\Exception $e){
            return redirect()->to('/admin/danh-muc');
            Toastr::error('Lỗi Hệ Thống Gọi Đức ¯\_(ツ)_/¯', 'Thông Báo', ["positionClass" => "toast-top-right"]);
        }
    }
}
