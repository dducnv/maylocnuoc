<?php

if(!function_exists('showCategories')){
    function showCategories($categories, $parent_id = 0, $char = '',$selected=0)
    {
   
        foreach ($categories as $key => $item)
        {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id)
            {
                if($selected !==0 && $item->id == $selected){
                    echo '<option selected value="'.$item->id.'">' .$char.$item->category_name.' </option>';
                }else{
                    echo '<option value="'.$item->id.'">' .$char.$item->category_name.' </option>';
                }
                unset($categories[$key]);

                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $item->id, $char.'|---');
            }
        }
    }
}

if(!function_exists('showCategoriesHome')){
    function showCategoriesHome($categories, $parent_id = 0, $sub = true)
    {

   
    
        echo $sub ? '':'<i class="fa fa-angle-right"></i> <ul>';
        foreach ($categories as $key => $item) {
         
             if($item->parent_id == $parent_id){
                unset($categories[$key]);
                echo ' <li>';
                echo '<a href="'. $item->category_slug.'">'. $item->category_name.'</a>';
                showCategoriesHome($categories, $item->id, false);
                echo '</li>';
            }
            } 
         echo "</ul>";
        
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
