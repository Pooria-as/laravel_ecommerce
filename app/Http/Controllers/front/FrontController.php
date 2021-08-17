<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $categories=Category::with("SubCategories")->get();
        $mid_slider=Product::with("brand")->where("main_slider","=","1")->where("status","1")->orderBy("id","DESC")->first();
        $Features=DB::table('products')->where("status","1")->orderBy("id","DESC")->limit(8)->get();
        $Trends=DB::table('products')->where("status","1")->where("trend","1")->orderBy("id","DESC")->limit(8)->get();
        $Best_rates=DB::table('products')->where("status","1")->where("best_rated","1")->orderBy("id","DESC")->limit(8)->get();
        $hot_deals=DB::table('products')->join("brands","products.brand_id","brands.id")
        ->select("products.*","brands.Brand_name")->get();
        $mid_sliders=DB::table('products')->join("categories","products.category_id","categories.id")
        ->select("products.*","categories.Category_name")->limit(3)->get();
        return view("front.index",compact("categories","mid_slider","Features","Trends","Best_rates","hot_deals","mid_sliders"));
    }
}
