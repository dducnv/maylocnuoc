<header class="header">

     <!-- Topbar - start -->
    <nav class="py-1  header_top">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i class='fa fa-phone'></i> 0383665477</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">ducbe2k2@gmail.com</a></li>
            </ul>

        </div>
    </nav>
    <header class="py-3 header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="index.html">
                    HABECOM
                </a>
            </div>
            <div class="shop-menu">
                <a href="{{asset('gio-hang')}}">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="shop-menu-ttl">{{__('Giỏ Hàng')}}</span>
                    (<b>0</b>)
                </a>
            </div>
        </div>
    </header>
     <div class="header-bottom">
         <div class="container">
             <nav class="topmenu">

                 <div class="topcatalog">
                     <a class="topcatalog-btn"><span>Tất Cả</span> Danh Mục</a>
                     <ul class="topcatalog-list">
                        <?php showCategoriesHome($categoriesView) ?>
                     </ul>
                 </div>
                 <button type="button" class="mainmenu-btn">Menu</button>

                 <ul class="mainmenu">
                     <li>
                         <a href="{{asset('/')}}" class="{{ Request::is('/') ? 'active' : null }}">
                             Trang chủ
                         </a>
                     </li>
                     <li>
                        <a href="{{asset('muc-luc')}}" class="{{Request::url() == url('/muc-luc')? 'active' :null }}">
                            mục lục
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('lien-he')}}" class="{{Request::url() == url('/lien-he')? 'active' :null }}">
                           Liên hệ
                        </a>
                    </li>

                     {{-- <li class="menu-item-has-children">
                         <a href="catalog-list.html">
                             Catalog <i class="fa fa-angle-down"></i>
                         </a>
                         <ul class="sub-menu">
                             <li>
                                 <a href="catalog-list.html">
                                     Catalog List - Style 1
                                 </a>
                             </li>
                             <li>
                                 <a href="catalog-list-2.html">
                                     Catalog List - Style 2
                                 </a>
                             </li>
                             <li>
                                 <a href="catalog-gallery.html">
                                     Catalog Gallery - Style 1
                                 </a>
                             </li>
                             <li>
                                 <a href="catalog-gallery-2.html">
                                     Catalog Gallery - Style 2
                                 </a>
                             </li>
                             <li>
                                 <a href="catalog-table.html">
                                     Catalog Table
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="menu-item-has-children">
                         <a href="product.html">
                             Product <i class="fa fa-angle-down"></i>
                         </a>
                         <ul class="sub-menu">
                             <li>
                                 <a href="product.html">
                                     Product - Style 1 (Slider)
                                 </a>
                             </li>
                             <li>
                                 <a href="product-2.html">
                                     Product - Style 2 (Scroll)
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li>
                         <a href="elements.html">
                             Elements
                         </a>
                     </li>
                     <li class="menu-item-has-children">
                         <a href="blog.html">
                             Blog <i class="fa fa-angle-down"></i>
                         </a>
                         <ul class="sub-menu">
                             <li>
                                 <a href="blog.html">
                                     Blog - Style 1
                                 </a>
                             </li>
                             <li>
                                 <a href="blog-2.html">
                                     Blog - Style 2
                                 </a>
                             </li>
                             <li>
                                 <a href="post.html">
                                     Single Post
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="menu-item-has-children">
                         <a href="#">
                             Pages <i class="fa fa-angle-down"></i>
                         </a>
                         <ul class="sub-menu">
                             <li>
                                 <a href="contacts.html">
                                     Contacts
                                 </a>
                             </li>
                             <li>
                                 <a href="cart.html">
                                     Cart
                                 </a>
                             </li>
                             <li>
                                 <a href="auth.html">
                                     Authorization
                                 </a>
                             </li>
                             <li>
                                 <a href="compare.html">
                                     Compare
                                 </a>
                             </li>
                             <li>
                                 <a href="wishlist.html">
                                     Wishlist
                                 </a>
                             </li>
                             <li>
                                 <a href="404.html">
                                     Error 404
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li>
                         <a href="https://themeforest.net/item/allstore-woocommerce-wordpress-shop-theme/19678066" rel="nofollow" target="_blank">
                             WordPress
                         </a>
                     </li>
                     <li class="mainmenu-more">
                         <span>...</span>
                         <ul class="mainmenu-sub"></ul>
                     </li> --}}
                 </ul>
                 <!-- Main menu - end -->

                 <!-- Search - start -->
                 <div class="topsearch">
                     <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                     <form class="topsearch-form" action="#">
                         <input name="search" id="search" type="text" placeholder="Search products">
                         <button class="btn-primary" type="submit"><i class="fa fa-search"></i></button>
                     </form>
                 </div>
                 <!-- Search - end -->

             </nav>		</div>
     </div>
     <!-- Topmenu - end -->

 </header>
