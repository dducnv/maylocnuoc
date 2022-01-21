@extends('ad_layout')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">All Orders</h2>
            <p class="mb-0">Your web analytics dashboard template.</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="javascript:void(0)" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-5" data-bs-toggle="modal" data-bs-target="#category">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Thêm Danh Mục
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
                            <th class="border-0">{{__('Tên Danh Mục')}}</th>
                            <th class="border-0">{{__('Slug')}}</th>
                            <th class="border-0">{{__('Từ Khóa')}}</th>
                            <th class="border-0">{{__('Danh Mục Mẹ')}}</th>
                            <th class="border-0">{{__('Trạng Thái Hiển Thị')}}</th>
                            <th class="border-0 rounded-end">{{__('Chức Năng')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!$categories)
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
                        @forelse($categories as $item)
                            <tr>
                                <td  class="fw-extrabold">{{$loop->index+1}}</td>
                                <td>{{$item->category_name}}</td>
                                <td>{{$item->category_slug}}</td>
                                <td>{{$item->meta_keywords}}</td>
                                <td>
                                    @if($item->parent_id == 0)
                                        <span class="badge bg-danger">{{__('Không có')}}</span>
                                    @else
                                        @foreach($category_parent as $parent)
                                            @if($parent->id == $item->parent_id && $parent->parent_category == 0)
                                                <span class="badge bg-success">{{$parent->category_name}}</span>
                                                @elseif($parent->id == $item->parent_id && $parent->parent_id !== 0)
                                                <span class="badge bg-warning">{{$parent->category_name}}</span>
                                            @endif

                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <div class="form-check form-switch mb-3">
                                        <input onclick="StatusCategory({{$item->id}})" name="status" @if($item->category_status == 0) checked @endif  class="form-check-input" type="checkbox" id="category_status">
                                        <label class="form-check-label" for="category_status}}">{{ __('Hiển Thị') }}</label>
                                    </div>
                                </td>

                                <td>
                                    <div>
                                        <a onclick="deleteCategory({{$item->id}})" class="fs-5 me-2"><i class="fas fa-trash"></i></a>
                                        <a class="fs-5 ms-2" data-bs-toggle="modal" data-bs-target="#edit_category-{{$item->id}}"><i class="fas fa-edit"></i></a>
                                    </div>
                                    <div class="modal fade" id="edit_category-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg ">
                                            <div class="modal-content">
                                                <form action="{{ url('admin/danh-muc/cap-nhat-danh-muc',['id'=>$item->id]) }}" method="post">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{__('Cập Nhật Danh Mục Chinh')}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="category_name_edit">{{__('Tên Danh Mục')}}</label>
                                                            <input name="category_name" onkeyup="ChangeToSlugCategoryEdit()" value="{{$item->category_name}}" type="text" class="form-control @error('category_name') is-invalid @enderror" id="category_name_edit">
                                                            @error('category_name')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror

                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="category_slug_edit">{{__('slug')}}</label>
                                                            <input name="category_slug" type="text" value="{{$item->category_slug}}" class="form-control @error('category_slug') is-invalid @enderror" id="category_slug_edit">
                                                            @error('category_slug')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="category_keyw">{{__('Từ Khóa Tìm Kiếm')}}</label>
                                                            <input name="category_keyw" type="text" class="form-control @error('category_keyw') is-invalid @enderror" value="{{$item->meta_keywords}}" id="category_keyw" >
                                                            @error('category_keyw')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="parent_category" >{{__('Danh mục mẹ')}}</label>
                                                            <select id="parent_category" class="form-select" name="parent_category">
                                                                <option value="0" selected>{{__('Không có danh mục mẹ')}}</option>
                                                                @foreach($category_parent as $item_parent)
                                                                    @if($item_parent->id !== $item->id && $item_parent->parent_id == 0)
                                                                        <option class="text-black" @if($item_parent->parent_id == $item->id) selected @endif value="{{$item_parent->id}}">{{$item_parent->category_name}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="category_desc_edit">{{__('Mô Tả Danh Mục')}}</label>
                                                            <textarea name="category_desc" class="form-control  @error('category_desc') is-invalid @enderror" id="category_desc_edit">{{$item->category_desc}}</textarea>
                                                            @error('category_desc')
                                                            <div class="invalid-feedback">
                                                                {{$message}}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-check form-switch mb-3">
                                                            <input name="status" @if($item->category_ed_status ==0 ) checked @endif  class="form-check-input" type="checkbox" id="category_status">
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
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">
                                    <div class="text-center">
                                        {{__('Không có danh mục nào ¯\_(ツ)_/¯')}}
                                    </div>

                                </td>
                            </tr>
                        @endforelse
                    @endif
                        <!-- Item -->

                        <!-- End of Item -->
                    </tbody>
                </table>
            </div>
        </div>
         {{-- Modal thêm danh mục chính --}}
        <div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg ">
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
                        <label for="parent_category" >{{__('Danh mục mẹ')}}</label>
                        <select id="parent_category" class="form-select" name="parent_category">
                            <option selected value="0">{{__('Không có danh mục mẹ')}}</option>
                            <?php showCategories($categories,0) ?>
                        </select>
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
        <div class="d-flex justify-content-end pb-2 pe-7">
            {!! $categories->appends(request()->input())->links("vendor.pagination.bootstrap-4") !!}
        </div>

    </div>

@endsection
