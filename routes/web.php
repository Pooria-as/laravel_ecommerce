<?php

use App\Http\Controllers\Admin\Product\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::middleware("auth")->get('admin', function () {
    return view("Dashboard.layout.master");
});

Route::prefix('admin')->group(function () {
    Route::resource('Category', "Admin\Category\CategoryController");
    Route::resource('Brand',"Admin\Category\BrandController");
    Route::resource('SubCategory',"Admin\Category\SubCategoryController");
    Route::resource('Coupon',"Admin\Category\CouponController");
    Route::resource('NewLater',"front\NewLaterController");
    Route::resource('Product',"Admin\Product\ProductController");
    Route::get('Product/ActiveStatus/{Product}',"Admin\Product\ProductController@ActiveStatus")->name("activeStatus");
    Route::get('Product/DeActiveStatus/{Product}',"Admin\Product\ProductController@DeActiveStatus")->name("DeActiveStatus");
    Route::get('/get/subcategory/{category_id}',"Admin\Product\ProductController@getSubCategory")->name("getSubcategory");
    Route::resource('Post',"Admin\PostController");
    Route::resource('BlogCategory',"Admin\BlogCategoryController");
});

Route::get("LogOut","HomeController@logout")->name("LogOut");
Route::get("ChangePassword","HomeController@changePassword")->name("ChnageUserPassword");
Route::post("UpdatePasswordUser","HomeController@updatePassword")->name("UpdatePasswordUser");
Route::get('/', "front\FrontController@index")->name("index");


Auth::routes(["verify"=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
