<?php

if (!function_exists('showCategories')) {
    function showCategories($categories, $parent_id = 0, $char = '', $selected = 0)
    {

        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id) {
                if ($selected !== 0 && $item->id == $selected) {
                    echo '<option selected value="' . $item->id . '">' . $char . $item->category_name . ' </option>';
                } else {
                    echo '<option value="' . $item->id . '">' . $char . $item->category_name . ' </option>';
                }
                unset($categories[$key]);

                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $item->id, $char . '|---');
            }
        }
    }
}
if (!function_exists('showCategoriesSearch')) {
    function showCategoriesSearch($categories, $parent_id = 0, $char = '', $selected = 0)
    {

        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id) {
                if ($selected !== 0 && $item->id == $selected) {
                    echo '<option selected value="' . $item->category_slug . '">' . $char . $item->category_name . ' </option>';
                } else {
                    echo '<option value="' . $item->category_slug . '">' . $char . $item->category_name . ' </option>';
                }
                unset($categories[$key]);

                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategoriesSearch($categories, $item->id, $char . '|---');
            }
        }
    }
}

if (!function_exists('showCategoriesHome')) {
    function showCategoriesHome($categories, $parent_id = 0, $sub = true)
    {
        $cate_child = array();
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }
        if ($cate_child) {
            echo $sub ? '' : '<ul  class="dropdown">';
            foreach ($cate_child as $item) {
                 echo '<li class="menu-item-has-children">' .
                    '<a href="#">'.$item->category_name.'</a>';
                showCategoriesHome($categories, $item->id,false);
                echo '</li>';
            }
            echo "</ul>";
        }
    }
}
if (!function_exists('showCategoriesNav')) {
    function showCategoriesNav($categories, $parent_id = 0, $sub = true)
    {
        $cate_child = array();
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }
        if ($cate_child) {
            echo $sub ? '' : '<i class="icon-arrow-right fa "> </i><ul>';
            foreach ($cate_child as $item) {
                echo ' <li>';
                echo '<a href="">' . $item->category_name . '</a>';
                showCategoriesNav($categories, $item->id, false);
                echo '</li>';
            }
            echo "</ul>";
        }
    }
}
if (!function_exists('categoryCatalog')) {
    function categoryCatalog($categories, $parent_id = 0, $sub = true, $char = '')
    {
        $cate_child = array();
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }
        if ($cate_child) {
            $active_cate="";
            $origin = request()->headers->get('origin');
            echo $sub ? '' : '<ul>';
            foreach ($cate_child as $item) {
                if(app("request")->input("cate")== $item->category_slug){
                    $active_cate = "active_cate";
                }
                echo ' <li>';
                echo '<a class="'.$active_cate.'" href="'.$origin.'/muc-luc?cate='.$item->category_slug.''.'">' . $char . $item->category_name . '</a>';
                categoryCatalog($categories, $item->id, false,$char . '|--');
                echo '</li>';
            }
            echo "</ul>";
        }
    }
}

// echo '
// <li>
// <a href="catalog-list.html">'.$item->category_name.'
// </a>
// <i class="fa fa-angle-right"></i>
// <ul>
// </ul>
// </li>
// ';

//if(!function_exists("separateData")){
//    function separateTags($data){
//        $data = explode(',',$data,);
//
//        foreach($data as $item){
//            echo '<span class="badge bg-primary me-1">'.$item.'</span>';
//        }
//    }
//}
