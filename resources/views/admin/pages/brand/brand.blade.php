@extends('ad_layout')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">{{__('Danh Sách Nhãn Hiệu')}}</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <form action="{{url('/admin/nhan-hieu/them-nhan-hieu')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div class="text-center">
                            <div id="logo-preview" class="logo-brand-preview m-auto mb-3 d-flex justify-content-center align-items-center" style="margin-top:15px;max-height:100px;">
                                <i class="fas fa-plus"></i>
                            </div>

                        </div>
                        <label for="thumbnail">{{__('Chọn Logo')}}</label>
                        <div class="input-group">
                           <span class="input-group-btn">
                             <a id="brand-logo" data-input="logo-path" data-preview="logo-preview" class="btn btn-primary  rounded-none">
                               <i class="fa fa-picture-o"></i> Chọn
                             </a>
                           </span>
                            <input id="logo-path"  class="form-control rounded-start ms-1 @error('brand-logo') is-invalid @enderror" placeholder="{{__('Đường Dẫn...')}}" type="text" name="brand-logo">

                        </div>
                        @error('brand-logo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name-brand">{{__('Tên Nhãn Hiệu')}}</label>
                        <input id="name-brand" name="name-brand" type="text" onkeyup="slugBrand()" class="form-control @error('name-brand') is-invalid @enderror" >
                        @error('name-brand')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug-brand">{{__('slug')}}</label>
                        <input type="text" name="brand_slug" class="form-control @error('brand_slug') is-invalid @enderror" id="slug-brand" >
                        @error('brand_slug')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" name="brand-status" type="checkbox" id="brand-status">
                        <label class="form-check-label" for="brand-status">{{ __('Hiển Thị') }}</label>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-2">
                            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            Thêm
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start">STT</th>
                                <th class="border-0">{{__('Tên Nhãn Hiệu')}}</th>
                                <th class="border-0">{{__("Logo")}}</th>
                                <th class="border-0">{{__('slug')}}</th>
                                <th class="border-0">{{__('Trạng Thái')}}</th>
                                <th class="border-0">{{__('Ngày Tạo')}}</th>
                                <th class="border-0 rounded-end">{{__('Chức Năng')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item -->
                            @if(!$brands)
                                <tr>
                                    <td colspan="12">
                                        <div class="text-center">
                                            <div class="spinner-border" role="status">
                                                <span class="visually-hidden"></span>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @else
                                @forelse($brands as $item)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$item->brand_name}}</td>
                                    <td>
                                        <div class="preview-logo">
                                            <img src="{{$item->brand_logo}}" alt="{{$item->brand_name}}">
                                        </div>
                                    </td>
                                    <td>{{$item->brand_slug}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" onclick="brandStatus({{$item->id}})" @if($item->brand_status == 0) checked @endif type="checkbox" id="category_status_ex">
                                            <label class="form-check-label" for="category_status_ex">{{ __('Hiển Thị') }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a onclick="deleteBrand({{$item->id}})" class="fs-5 me-2"><i class="fas fa-trash"></i></a>
                                            <a class="fs-5 ms-2" data-bs-toggle="modal" data-bs-target="#edit_brand-{{$item->id}}"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="modal fade" id="edit_brand-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <form action="{{url('/admin/nhan-hieu/cap-nhat-nhan-hieu',['id'=>$item->id])}}" method="POST">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{__('Cập Nhật Nhãn Hiệu')}}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="mb-3">
                                                                <label for="name-brand-update">{{__('Tên Nhãn Hiệu')}}</label>
                                                                <input id="name-brand-update" value="{{$item->brand_name}}" name="name-brand-update" type="text" onkeyup="slugBrandUpdate()" class="form-control @error('name-brand-update') is-invalid @enderror" >
                                                                @error('name-brand-update')
                                                                <div class="invalid-feedback">
                                                                    {{$message}}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="slug-brand-update">{{__('slug')}}</label>
                                                                <input type="text" value="{{$item->brand_slug}}" name="brand-slug-update" class="form-control @error('brand-slug-update') is-invalid @enderror" id="slug-brand-update" >
                                                                @error('brand-slug-update')
                                                                <div class="invalid-feedback">
                                                                    {{$message}}
                                                                </div>
                                                                @enderror
                                                            </div>


                                                            <div class="form-check form-switch mb-3">
                                                                <input class="form-check-input" @if($item->brand_status == 0) checked @endif type="checkbox" name="brand-status-update" id="brand-status-update">
                                                                <label class="form-check-label" for="brand-status-update">{{ __('Hiển Thị') }}</label>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Đóng')}}</button>
                                                            <button type="submit" class="btn btn-primary">{{__('Lưu nhãn hiệu')}}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7">
                                            <div class="text-center">
                                                {{__('Không có nhãn hàng nào ¯\_(ツ)_/¯')}}
                                            </div>

                                        </td>
                                    </tr>
                            @endforelse
                            @endif

                            <!-- End of Item -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
