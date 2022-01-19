<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('admin.ad_home');
// });

Route::get('/',[WebController::class,'index']);
Route::get('muc-luc',[WebController::class,'catalog']);
Route::get('search-and-sort',[WebController::class,'sortSearch']);
Route::get('/chi-tiet/{slug}',[WebController::class,'details_product']);
Route::post("/them-gio-hang/{id}",[CartController::class,"add_to_cart"]);
Route::get("/delete-cart-item/{id}",[CartController::class,"removeItemCart"]);
Route::get("/delete-all-cart",[CartController::class,"removeAllCart"]);
Route::get('gio-hang',[CartController::class,'cart']);
Route::get('lien-he',[WebController::class,'contacts']);
Route::get('thanh-toan',[WebController::class,'checkout']);
Route::post('checkout',[WebController::class,'checkoutSave']);
Route::get('xac-nhan',[WebController::class,'confirm']);

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function (){
    return view('dashboard');
})->name('dashboard');

