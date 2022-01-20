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
                    <form action="{{ url('admin/danh-muc/them-danh-muc') }}" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{__('Danh Mục Chinh')}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="category_name">{{__('Tên Danh Mục')}}</label>
                                <input name="category_name" onkeyup="ChangeToSlugCategory()" type="text" class="form-control @error('category_name') is-invalid @enderror" id="category_name">
                                @error('category_name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="category_slug">{{__('slug')}}</label>
                                <input name="category_slug" type="text" class="form-control @error('category_slug') is-invalid @enderror" id="category_slug">
                                @error('category_slug')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category_keyw">{{__('Từ Khóa Tìm Kiếm')}}</label>
                                <input name="category_keyw" type="text" class="form-control  @error('category_keyw') is-invalid @enderror" id="category_keyw" >
                                @error('category_keyw')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="category_desc">{{__('Mô Tả Danh Mục')}}</label>
                                <textarea name="category_desc" class="form-control  @error('category_desc') is-invalid @enderror" id="category_desc"></textarea>
                                @error('category_desc')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input name="status"  class="form-check-input" type="checkbox" id="category_status">
                                <label class="form-check-label" for="category_status">{{ __('Hiển Thị') }}</label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Đóng')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('Lưu Danh Mục')}}</button>
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
