@extends('ad_layout')
@section('main')
    <div class="py-4">

        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">{{__('Thêm sản phẩm')}}</h1>
            </div>
            <div>
                <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/forms/"
                   class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Forms Docs</a>
            </div>
        </div>
    </div>
    <form action="{{url('admin/san-pham/luu-san-pham')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4 col-xl-4 col-sm-12 col-lg-4 col-sm-4  mb-4">
                <div class="card border-0 shadow components-section">
                    <div class="card-body">
                        <label for="thumbnail">{{__('Ảnh sản phẩm (Tối đa 1 ảnh)')}}</label>
                        <div class="input-group mb-3">
                            <input id="thumbnail"
                                   class="form-control @error('thumbnail') is-invalid @enderror" type="file"
                                   accept="image/*"
                                   name="thumbnail">
                        </div>
                        @error('thumbnail')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <div id="thumbnail-preview" class="img-preview mb-3">
                        </div>
                        <label for="thumbnail-gallery">{{__('Ảnh chi tiết sản phẩm (Không giới hạn)')}}</label>
                        <div class="input-group mb-3">
                            <div class="input-group control-group increment">

                                <input id="thumbnail-gallery"
                                       class="form-control @error('product-gallery') is-invalid @enderror" type="file"
                                       accept="image/*" multiple
                                       name="product-gallery[]">
                            </div>
                        </div>
                        @error('product-gallery')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <div id="gallery-preview" class="img-preview mb-3">
                        </div>
                        <div class="col-lg-12 col-sm-12 mt-4 mt-md-0">
                            <div class="mb-3">
                                <span class="h6 fw-bold">{{__('Hiển thị sản phẩm')}}</span>
                            </div>
                            <div class="form-check form-switch">
                                <input name="product-status" class="form-check-input" type="checkbox"
                                       id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{__('Hiển Thị')}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xl-8 col-sm-12 col-lg-8 col-sm-8 mb-4">
                <div class="card border-0 shadow components-section mb-4">
                    <div class="card-body">
                        <div class="row mb-">
                            <div class="col-lg-12 col-sm-12">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="product-name">{{__('Tên sản phẩm')}}</label>
                                    <input name="product-name" type="text" onkeyup="productSlug()"
                                           class="form-control @error('product-name') is-invalid @enderror"
                                           id="product-name">
                                    @error('product-name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="product-slug">{{__('Slug')}}</label>
                                    <input name="product_slug" type="text"
                                           class="form-control @error('product_slug') is-invalid @enderror"
                                           id="product-slug">
                                    @error('product_slug')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="product-slug">{{__('Từ Khóa')}}</label>
                                    <input name="product-keywords" type="text"
                                           class="form-control @error('product-keywords') is-invalid @enderror"
                                           id="product-slug" data-role="tagsinput" aria-describedby="keywords">
                                    <small id="keywords"
                                           class="form-text text-muted">{{__('Điều này được sử dụng để tìm kiếm. Nhập những từ mà khách hàng có thể tìm thấy sản phẩm này.')}}</small>
                                    @error('product-keywords')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="product-price">{{__('Giá sản phẩm')}}</label>
                                    <input name="product-price" type="number"
                                           class="form-control @error('product-price') is-invalid @enderror"
                                           id="product-price">
                                    @error('product-price')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="product-category">{{__('Chọn danh mục')}}</label>
                                    <select name="product-category" id="product-category"
                                            class="form-select @error('product-category') is-invalid @enderror">
                                        <option value="" selected> {{__('Chọn danh mục')}}</option>
                                        {!!showCategories($categories,0) !!}
                                    </select>
                                    @error('product-category')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="product-brand">{{__('Chọn nhãn hiệu')}}</label>
                                    <select name="product-brand" id="product-brand"
                                            class="form-select @error('product-brand') is-invalid @enderror">
                                        <option value="" selected> {{__('Chọn nhãn hiệu')}}</option>

                                        @foreach($brand as $item)
                                            <option value="{{$item->id}}">{{$item->brand_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('product-brand')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <!-- End of Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow components-section mb-4">
                    <div class="card-body">
                        <div class="row mb-">
                            <div class="col-lg-12 col-sm-12">
                                <div class="card-body">
                                    <div class="row mb-">
                                        <div class="mb-3">
                                            <label for="specification">{{__('Thông số kỹ thuật')}}</label>
                                            <textarea name="product-specification" id="specification"
                                                      class="form-control @error('product-specification') is-invalid @enderror">
                                                     <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="title width1">Tiêu Đề</td>
                                                                <td>Nội Dung</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                            </textarea>
                                            @error('product-specification')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow components-section mb-4">
                    <div class="card-header">
                        {{__('Mô tả sản phẩm')}}
                    </div>
                    <div class="card-body">
                        <div class="row mb-">
                            <div class="col-lg-12 col-sm-12">
                                <div class="mb-3">
                                    <label for="desc-pro">{{__('Mô tả')}}</label>
                                    <textarea id="desc-pro" name="product-desc"
                                              class="form-control @error('product-desc') is-invalid @enderror"></textarea>
                                    @error('product-desc')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="content">{{__('Mô tả chi tiết')}}</label>
                                    <textarea name="product-content" id="content"
                                              class="form-control @error('product-content') is-invalid @enderror"></textarea>
                                    @error('product-content')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow components-section mb-4">
                    <div class="card-body d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-5">
                            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            {{__('Hoàn tất')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
