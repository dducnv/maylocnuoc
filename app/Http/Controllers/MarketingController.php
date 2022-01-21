<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\MetaSeo;
use Illuminate\Support\Facades\Validator;

class MarketingController extends Controller
{
    public function marketing(){
        $seo = MetaSeo::findOrFail(1);
        return view('admin.pages.display.marketing',[
            'seo'=>$seo
        ]);
    }
    public function marketing_save(Request $request){
        $seo = MetaSeo::findOrFail(1);
        $validator = Validator::make($request->all(), [
            "phone_number" => ["required","numeric","regex:/([\+84|84|0]+(3|5|7|8|9|1[2|6|8|9]))+([0-9]{8})\b/"],
            "email" => ["required","email"],
            "keywords" => "required",
            "address" => "required",
            "meta_desc" => "required",
        ], [
            "phone_number.required" => "Hãy nhập số điện thoại.",
            "phone_number.numeric" => "Số điện thoại không được chứa ký tự đặc biệt.",
            "phone_number.regex" => "'".$request->get("phoneNumber")."' Đây không phải số điện thoại.",
            "email.required" => "Hãy nhập email.",
            "email.email" =>"'".$request->get("email")."' Đây Không Phải Email.",
            "address.required" => "Hãy nhập địa chỉ.",
            "meta_desc.required" => "Hãy nhập mô tả.",
        ]);
//        dd($request->all());
        if ($validator->fails()) {
            Toastr::error('Lỗi Dữ Liệu Nhập Lại ¯\_(ツ)_/¯', 'Thông Báo', ["positionClass" => "toast-top-right"]);
            $validator->validate(
                [
                    "phone_number.required" => "Hãy nhập số điện thoại.",
                    "phone_number.numeric" => "Số điện thoại không được chứa ký tự đặc biệt.",
                    "phone_number.regex" => "'".$request->get("phoneNumber")."' Đây không phải số điện thoại.",
                    "email.required" => "Hãy nhập email.",
                    "email.email" =>"'".$request->get("email")."' Đây Không Phải Email.",
                    "address.required" => "Hãy nhập địa chỉ.",
                    "meta_desc.required" => "Hãy nhập mô tả.",
                ]
            );
        }
        try{
            $seo->update([
                'phone_number'=>$request->get('phone_number'),
                'email'=>$request->get('email'),
                'address'=>$request->get('address'),
                'meta_keywords'=>$request->get('keywords'),
                'meta_desc'=>$request->get('meta_desc'),
            ]);
            Toastr::success('Sửa nội dung thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->to('/admin/marketing') ;
        }catch(\Exception $e){
            Toastr::error('Lỗi hệ thống =))', 'Thông báo', ["positionClass" => "toast-top-right"]) ;
            return  redirect()->to('/admin//admin/marketing');
        }
    }
}
