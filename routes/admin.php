<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SlideshowController;
use App\Http\Controllers\MarketingController;
Route::middleware(["auth","admin"])->group(function () {
    Route::get('/',[AdminController::class,'ad_index']);

    Route::group(['prefix' => 'quan-ly-tap-tin'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::get('/san-pham', [ProductController::class,'all_product']);
    Route::get('/san-pham/them-san-pham', [ProductController::class,'add_product']);
    Route::get('/san-pham/sua-san-pham/{id}', [ProductController::class,'edit_product']);
    Route::post('/san-pham/luu-san-pham', [ProductController::class, 'save_product']);
    Route::post('/san-pham/cap-nhat-san-pham/{id}', [ProductController::class, 'update_product']);
    Route::delete('/san-pham/xoa-san-pham/{id}', [ProductController::class, 'delete_product']);
    Route::put('/san-pham/trang-thai-san-pham/{id}', [ProductController::class, 'product_status']);

// Category Controller(Danh Muc)
    Route::get('/danh-muc', [CategoryController::class, 'all_category']);
    Route::post('/danh-muc/them-danh-muc', [CategoryController::class, 'save_category']);
    Route::delete('/danh-muc/xoa-danh-muc/{id}', [CategoryController::class, 'delete_category']);
    Route::post('/danh-muc/cap-nhat-danh-muc/{id}', [CategoryController::class, 'update_category']);
    Route::put('/danh-muc/trang-thai-danh-muc/{id}', [CategoryController::class, 'category_status']);

//Brand Category
    Route::get('/nhan-hieu', [BrandController::class, 'all_brand']);
    Route::post('/nhan-hieu/them-nhan-hieu', [BrandController::class, 'save_brand']);
    Route::post('/nhan-hieu/cap-nhat-nhan-hieu/{id}', [BrandController::class, 'update_brand']);
    Route::delete('/nhan-hieu/xoa-nhan-hieu/{id}', [BrandController::class, 'delete_brand']);
    Route::put('/nhan-hieu/trang-thai-nhan-hieu/{id}', [BrandController::class, 'brand_status']);

//Slideshow
    Route::get('/hien-thi/trinh-chieu',[SlideshowController::class,'display_setting']);
    Route::post('/hien-thi/trinh-chieu/luu-trinh-chieu',[SlideshowController::class,'slideshow_save']);
    Route::put('/hien-thi/trinh-chieu/trang-thai/{id}',[SlideshowController::class,'slideshow_status']);
    Route::delete('/hien-thi/trinh-chieu/xoa-trinh-chieu/{id}',[SlideshowController::class,'delete_slideshow']);

//other route
    Route::get('/marketing',[MarketingController::class,'marketing']);

});
