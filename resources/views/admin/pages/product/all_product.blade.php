@extends('ad_layout')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">Danh Sách Sản Phẩm</h2>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{asset('/admin/san-pham/them-san-pham')}}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Thêm Sản Phẩm
        </a>
    </div>
</div>
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">{{'STT'}}</th>
                        <th class="border-0">{{__('Tên sản phẩm')}}</th>
                        <th class="border-0">{{__('Ảnh sản phẩm')}}</th>
                        <th class="border-0">{{__('Slug')}}</th>
                        <th class="border-0">{{__('Thẻ')}}</th>
                        <th class="border-0">{{__('Giá sản phẩm')}}</th>
                        <th class="border-0">{{__('Thuộc danh mục')}}</th>
                        <th class="border-0">{{__('Thuộc nhãn hiệu')}}</th>
                        <th class="border-0">{{__('Số lượng người xem')}}</th>
                        <th class="border-0">{{__('Ngày tạo')}}</th>
                        <th class="border-0">{{__('Trạng thái hiển thị')}}</th>
                        <th class="border-0 rounded-end">{{__('Chức năng')}}</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @if(!$products)
                        <tr>
                            <td colspan="12">
                                <div class="text-center">
                                    <div class="spinner-border" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @else
                        @forelse($products as $item)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$item->product_name}}</td>
                                <td>
                                    <div class="preview-image">
                                        <img src="{{$item->product_image}}" alt="{{$item->product_name}}">
                                    </div>
                                </td>
                                <td>{{$item->product_slug}}</td>
                                <td>
                                    <div style="height:auto;position:relative">
                                        @php
                                            $tags = explode(',',$item->product_tags)
                                        @endphp
                                        @foreach($tags as $tag)
                                            <span class="badge bg-primary">{{$tag}}</span>
                                        @endforeach
                                    </div>
                                </td>
                                <td>{{$item->product_price}}</td>
                                <td>{{$item->category->category_name}}</td>
                                <td>{{$item->brand->brand_name}}</td>
                                <td>{{$item->product_views}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" onclick="productStatus({{$item->id}})" @if($item->product_status == 0) checked @endif type="checkbox" id="product_status">
                                        <label class="form-check-label" for="product_status">{{ __('Hiển Thị') }}</label>
                                    </div>
                                </td>
                                <td>
                                    <a onclick="deleteProduct({{$item->id}})" class="fs-5 me-2"><i class="fas fa-trash"></i></a>
                                    <a href="{{url('admin/san-pham/sua-san-pham',['id'=>$item->id])}}" class="fs-5 ms-2"><i class="fas fa-edit"></i></a>
                                </td>

                            </tr>

                        @empty
                            <tr>
                                <td colspan="12">
                                    <div class="text-center">
                                        {{__('Không có sản phẩm nào ¯\_(ツ)_/¯')}}
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
    <div class="d-flex justify-content-end pb-2 pe-7">
        {!! $products->appends(request()->input())->links("vendor.pagination.bootstrap-4") !!}
    </div>
</div>


@endsection
