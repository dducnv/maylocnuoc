@extends('ad_layout')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Volt</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                </ol>
            </nav>
            <h2 class="h4">All Orders</h2>
            <p class="mb-0">Your web analytics dashboard template.</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="javascript:void(0)" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-5" data-bs-toggle="modal" data-bs-target="#category">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Thêm Ảnh
            </a>

        </div>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th  scope="col" class="border-0 rounded-start col">{{__('#')}}</th>
                            <th class="border-0">{{__('Tiêu đề')}}</th>
                            <th class="border-0">{{__('Hình ảnh')}}</th>
                            <th class="border-0">{{__('Trạng Thái Hiển Thị')}}</th>
                            <th class="border-0 rounded-end">{{__('Chức Năng')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($slideshow == '')
                        <tr>
                            <td colspan="5">
                                <div class="text-center">
                                    <div class="spinner-border" role="status">
                                        <span class="visually-hidden"></span>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @else
                        
                    @endif
                    @foreach ($slideshow as $item )
                    <tr>
                         <td >{{$loop->index+1}}</td>
                         <td >{{$item->title}}</td>
                         <td >{{$item->image}}</td>
                         <td > 
                             <div class="form-check form-switch mb-3">
                                 <input onclick="slideStatus({{$item->id}})" name="slideshow_status" @if($item->slideshow_status == 0) checked @endif  class="form-check-input" type="checkbox" id="slideshow_status">
                                <label class="form-check-label" for="slideshow_status">{{ __('Hiển Thị') }}</label>
                             </div>
                         </td>
                         <td >
                            <div>
                                <a onclick="deleteSlide({{$item->id}})" class="fs-5 me-2"><i class="fas fa-trash"></i></a>
                                <a class="fs-5 ms-2" data-bs-toggle="modal" data-bs-target="#edit_slideshow-{{$item->id}}"><i class="fas fa-edit"></i></a>
                            </div>     
                        </td>
                     </tr>
                    @endforeach
                        <!-- Item -->

                        <!-- End of Item -->
                    </tbody>
                </table>
            </div>
        </div>
         {{-- Modal thêm danh mục chính --}}
        <div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <form action="{{ url('admin/hien-thi/trinh-chieu/luu-trinh-chieu') }}" method="post">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{__('Ảnh Trình Chiếu')}}</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                         <div class="text-center">
                             <div id="slideshow_preview" class="logo-brand-preview m-auto mb-3 d-flex justify-content-center align-items-center" style="margin-top:15px;max-height:100px;">
                                 
                             </div>

                         </div>
                         <label for="slideshow_path">{{__('Chọn Ảnh')}}</label>
                         <div class="input-group">
                            <span class="input-group-btn">
                              <a id="slideshow_btn" data-input="slideshow_path" data-preview="slideshow_preview" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Chọn
                              </a>
                            </span>
                             <input id="slideshow_path" value=""  class="form-control rounded-start ms-1 @error('image') is-invalid @enderror" placeholder="{{__('Đường Dẫn...')}}" type="text" name="image">
                         </div>
                         @error('image')
                         <div class="invalid-feedback">
                             {{$message}}
                         </div>
                         @enderror
                     </div>
                    <div class="mb-3">
                        <label for="title">{{__('Tiêu đề')}}</label>
                        <input name="title" onkeyup="ChangeToSlugCategory()" type="text" class="form-control @error('title') is-invalid @enderror" id="title">
                        @error('title')
                         <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror

                    </div>
                    <div class="form-check form-switch mb-3">
                        <input name="slideshow_status"  class="form-check-input" type="checkbox" id="slide_status">
                        <label class="form-check-label" for="slide_status">{{ __('Hiển Thị') }}</label>
                    </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Đóng')}}</button>
                  <button type="submit" class="btn btn-primary">{{__('Lưu')}}</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        <div class="d-flex justify-content-end pb-2 pe-7">
        </div>

    </div>

@endsection
