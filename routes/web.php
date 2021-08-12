<?php

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
});

Route::get("LogOut","HomeController@logout")->name("LogOut");


Route::get('/', function () {

    return view("front.index");

});









Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
