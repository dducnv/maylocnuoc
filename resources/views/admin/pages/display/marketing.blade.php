@extends('ad_layout')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">Tiếp Thị</h2>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="javascript:void(0)" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#meta_seo">
                Chỉnh Sửa
            </a>
        </div>
        <div class="modal fade" id="meta_seo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen ">
                <div class="modal-content">
                    <form action="{{ url('admin/marketing/save') }}" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{__('Mô tả tiếp thị')}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="phone_number">{{__('Số điện thoại')}}</label>
                                <input name="phone_number"  value="{{$seo->phone_number}}" type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number">
                                @error('phone_number')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email">{{__('Email')}}</label>
                                <input name="email" value="{{$seo->email}}" type="text" class="form-control @error('email') is-invalid @enderror" id="email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="keywords">{{__('Từ Khóa Tìm Kiếm')}}</label>
                                <input name="keywords" value="{{$seo->meta_keywords}}" type="text" class="form-control  @error('keywords') is-invalid @enderror" id="keywords" >
                                @error('keywords')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address">{{__('Địa chỉ cửa hàng')}}</label>
                                <textarea name="address" class="form-control  @error('address') is-invalid @enderror" id="address">{{$seo->address}}</textarea>
                                @error('address')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="meta_desc">{{__('Mô Tả Trang Web')}}</label>
                                <textarea name="meta_desc" class="form-control  @error('meta_desc') is-invalid @enderror" id="meta_desc">{{$seo->meta_desc}}</textarea>
                                @error('meta_desc')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Đóng')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('Lưu Thông Tin')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="mb-3">
                        <h2>Thông Tin Cửa Hàng</h2>
                        <ul>
                            <li>Email: {{$seo->email}}</li>
                            <li>Số ĐT: {{$seo->phone_number}}</li>
                            <li>Địa Chỉ Cửa Hàng: {{$seo->address}}</li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <h2>META SEO</h2>
                        <ul>
                            <li>Ảnh: {{$seo->meta_image}}</li>
                            <li>Từ Khoá: {{$seo->meta_keywords}}</li>
                            <li>Mô tả: {{$seo->meta_desc}}</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
