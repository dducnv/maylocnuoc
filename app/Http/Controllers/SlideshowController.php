<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slideshow;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;


class SlideshowController extends Controller
{
    //
    public function display_setting(){
        $slideshow = Slideshow::all();
        return view('admin.pages.display.slideshow',[
            'slideshow'=>$slideshow,
        ]
    );}


     /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function slideshow_save(Request $request){
        $validator = Validator::make($request ->all(),[
            'title'=>'required',
            'image'=>'required',
        ],[
            'title.required'=>'Vui lòng nhập tiêu đề', 
            'image.required'=>'Vui lòng chọn hình ảnh',
        ]);

        if($validator->fails()) {

            Toastr::error('Lỗi Dữ Liệu Nhập Lại ¯\_(ツ)_/¯', 'Thông Báo', ["positionClass" => "toast-top-right"]);
            $validator->validate(
                [
                    'title.required'=>'Vui lòng nhập tiêu đề', 
                    'image.required'=>'Vui lòng chọn hình ảnh',
                ]
            );
        }
        if($request ->has('slideshow_status')){
            $status = 0;
        }else{
            $status = 1;
        }
        try{
            Slideshow::create([
                'title'=>$request->get('title'),
                'image'=>$request->get('image'),
                'slideshow_status'=>$status
            ]);
            Toastr::success('Thêm thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->to('/admin/hien-thi/trinh-chieu');
        }catch(\Exception $e){
            Toastr::error('Lỗi Hệ Thống Gọi Đức ¯\_(ツ)_/¯', 'Title', ["positionClass" => "toast-top-right"]);
            return redirect()->to('/admin/hien-thi/trinh-chieu');
        }


    }


    public function delete_slideshow($id)
    {
        $slideshow = Slideshow::findOrFail($id);
        $slideshow->delete();

    }
    public function slideshow_status($id){
        $slideshow = Slideshow::findOrFail($id);
        if($slideshow-> slideshow_status == 0){
            $status = 1;
            Toastr::warning('Đã Ẩn ', 'Trạng Thái', ["positionClass" => "toast-top-right"]);

        }else{
            $status = 0;
            Toastr::success('Đã Hiển Thị ', 'Trạng Thái', ["positionClass" => "toast-top-right"]);

        }
        try{
        $slideshow->update([
            'slideshow_status'=> $status
        ]);
        }catch(\Exception $e){
            Toastr::error('Lỗi Hệ Thống Gọi Đức ¯\_(ツ)_/¯', 'Title', ["positionClass" => "toast-top-right"]);
            return redirect()->to('/admin/hien-thi/trinh-chieu');
        }
    }

}
