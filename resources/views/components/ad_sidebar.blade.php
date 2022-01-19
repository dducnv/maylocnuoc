<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="{{asset('assets/admin/')}}/index.html">
            <img class="navbar-brand-dark" src="{{asset('assets/admin/')}}/assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="{{asset('assets/admin/')}}/assets/img/brand/dark.svg" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </nav>

        <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="d-block">
                <h2 class="h5 mb-3">{{Auth::user()->name}}</h2>
                <a href="{{asset('/admin/profile')}}" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                    {{__('Tài khoản')}}
                </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
            <li class="mb-5 mt-2 text-center">
                <a href="{{asset('assets/admin')}}" class="nav-brand d-flex justify-content-center fw-extrabold align-items-center">
                <span class="mt-1 ms-1 sidebar-text">HABECOM ADMIN</span>
                </a>
            </li>
            <li class="nav-item  active ">
                <a href="{{asset('chiều cao giữa các dòng')}}" class="nav-link">
                <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                </span>
                <span class="sidebar-text">Thống Kê</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{asset('/admin/profile')}}" class="nav-link">
                <span class="sidebar-icon">
                    <i class="fas icon icon-xs me-2 fa-user-cog"></i>
                </span>
                <span class="sidebar-text">Tài Khoản Của Tôi</span>
                </a>
            </li>
                <li class="nav-item ">
                    <a href="{{asset('/admin/account-manager')}}" class="nav-link">
                <span class="sidebar-icon">
                    <i class="fas icon icon-xs me-2 fa-users-cog"></i>
                </span>
                        <span class="sidebar-text">Tài Khoản Hệ Thông</span>
                    </a>
                </li>
            <li class="nav-item ">
                <a id="file-manager" class="nav-link">
                <span class="sidebar-icon">
                    <i class="fas fa-folder-plus"></i>
                </span>
                <span class="sidebar-text">{{__('Quản lý tập tin')}}</span>
                </a>
            </li>
            <li role="separator" class="dropdown-divider border-gray-700"></li>
            <li class="nav-item ">
                <a href="{{asset('assets/admin/')}}" class="nav-link">
                <span class="sidebar-icon">
                    <i class="fas  icon icon-xs me-2  fa-users"></i>
                </span>
                <span class="sidebar-text">Khách Hàng</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{asset('assets/admin/')}}" class="nav-link">
                <span class="sidebar-icon">
                    <i class="fas  icon icon-xs me-2 fa-cart-arrow-down"></i>
                </span>
                <span class="sidebar-text">Đơn Hàng</span>
                </a>
            </li>

            <li class="nav-item ">
                <a href="{{asset('/admin/nhan-hieu')}}" class="nav-link">
                <span class="sidebar-icon">
                    <i class="fas  icon icon-xs me-2  fa-copyright"></i>
                </span>
                <span class="sidebar-text">Nhãn Hiệu</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{asset('/admin/danh-muc')}}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas icon icon-xs me-2 fa-list"></i>
                    </span>
                    <span class="sidebar-text">Danh Muc</span>
                    </a>
            </li>
            <li class="nav-item">
                <span
                class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                data-bs-toggle="collapse" data-bs-target="#product">
                <span>
                    <span class="sidebar-icon">
                        <i class="fas icon icon-xs me-2 fa-cart-plus"></i>
                    </span>
                    <span class="sidebar-text">Sản Phâm</span>
                </span>
                <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </span>
                </span>
                <div class="multi-level collapse "
                role="list" id="product" aria-expanded="false">
                <ul class="flex-column nav">
                    <li class="nav-item ">
                    <a class="nav-link" href="{{asset('/admin/san-pham/them-san-pham')}}">
                        <span class="sidebar-text">Thêm Sản Phẩm</span>
                    </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{asset('/admin/san-pham')}}">
                            <span class="sidebar-text">Danh Sách</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{asset('assets/admin/')}}/pages/tables/bootstrap-tables.html">
                            <span class="sidebar-text">Thêm Sản Phẩm</span>
                        </a>
                    </li>

                </ul>
                </div>
            </li>
            <li class="nav-item">
                <span
                class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                data-bs-toggle="collapse" data-bs-target="#slideshow">
                <span>
                    <span class="sidebar-icon">
                        <i class="fas icon icon-xs me-2 fa-cart-plus"></i>
                    </span>
                    <span class="sidebar-text">{{__('Cài đặt hiển thị')}}</span>
                </span>
                <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </span>
                </span>
                <div class="multi-level collapse "
                role="list" id="slideshow" aria-expanded="false">
                <ul class="flex-column nav">
                    <li class="nav-item ">
                    <a class="nav-link" href="{{asset('/admin/hien-thi/trinh-chieu')}}">
                        <span class="sidebar-text">{{__('Ảnh trình chiếu')}}</span>
                    </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{asset('/admin/san-pham')}}">
                            <span class="sidebar-text">Danh Sách</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{asset('assets/admin/')}}/pages/tables/bootstrap-tables.html">
                            <span class="sidebar-text">Thêm Sản Phẩm</span>
                        </a>
                    </li>

                </ul>
                </div>
            </li>
            <li class="nav-item">
                <span
                class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                data-bs-toggle="collapse" data-bs-target="#tiep-thi">
                <span>
                    <span class="sidebar-icon">
                        <i class="fas icon icon-xs me-2  fa-bullhorn"></i>
                    </span>
                    <span class="sidebar-text">{{__('Tiếm Thị')}}</span>
                </span>
                <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </span>
                </span>
                <div class="multi-level collapse "
                role="list" id="tiep-thi" aria-expanded="false">
                <ul class="flex-column nav">
                    <li class="nav-item ">
                    <a class="nav-link" href="{{asset('/admin/them-san-pham')}}">
                        <span class="sidebar-text">Người Đăng Ký</span>
                    </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{asset('/admin/san-pham')}}">
                            <span class="sidebar-text">Gửi Thông Báo</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{asset('assets/admin/')}}/pages/tables/bootstrap-tables.html">
                            <span class="sidebar-text">Địa Chỉ</span>
                        </a>
                    </li>

                </ul>
                </div>
            </li>
            <li class="nav-item">
                <span
                class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                data-bs-toggle="collapse" data-bs-target="#order">
                <span>
                    <span class="sidebar-icon">
                        <i class="fas icon icon-xs me-2 fa-cogs"></i>
                    </span>
                    <span class="sidebar-text">Thiết Lập</span>
                </span>
                <span class="link-arrow">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </span>
                </span>
                <div class="multi-level collapse "
                role="list" id="order" aria-expanded="false">
                <ul class="flex-column nav">
                    <li class="nav-item ">
                    <a class="nav-link" href="{{asset('/admin/them-san-pham')}}">
                        <span class="sidebar-text">Thêm Sản Phẩm</span>
                    </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{asset('/admin/san-pham')}}">
                            <span class="sidebar-text">Danh Sách</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{asset('assets/admin/')}}/pages/tables/bootstrap-tables.html">
                            <span class="sidebar-text">Thêm Sản Phẩm</span>
                        </a>
                    </li>

                </ul>
                </div>
            </li>
            </ul>
        </div>
        </nav>
