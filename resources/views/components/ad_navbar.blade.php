
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <!-- Search form -->

                <!-- / Search form -->
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">

                <li class="nav-item dropdown ms-lg-3">
                <a class="nav-link dropdown-toggle pt-1 px-0" href="{{asset('/admin/profile')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="media d-flex align-items-center">
                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                        <span class="mb-0 font-small fw-bold text-gray-900">{{Auth::user()->name}}</span>
                    </div>
                    </div>
                </a>
                <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                    <a class="dropdown-item d-flex align-items-center" href="{{asset('/admin/profile')}}">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                    {{__('Tài Khoản')}}
                    </a>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </nav>
