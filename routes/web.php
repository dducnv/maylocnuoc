<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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
Route::get('chi-tiet',[WebController::class,'details_product']);
Route::get('gio-hang',[WebController::class,'cart']);
Route::get('lien-he',[WebController::class,'contacts']);
Route::get('thanh-toan',[WebController::class,'checkout']);

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function (){
    return view('dashboard');
})->name('dashboard');

