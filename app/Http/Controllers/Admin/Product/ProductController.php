<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductValidation;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view("Dashboard.Product.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brnads=Brand::all();
        $categories=Category::all();
        return view("Dashboard.Product.create",compact("brnads","categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->image_one;
        $image_unique=hexdec(uniqid());
        $image_get_extention=strtoupper($image->getClientOriginalExtension());
        $image_name=$image_unique.".".$image_get_extention;
        $image_location ="Dashboard/Product/imgs/";
        $last_image=$image_location.$image_name;
        $image->move($image_location,$image_name);

        $image_two=$request->image_two;
        $image_unique=hexdec(uniqid());
        $image_get_extention=strtoupper($image->getClientOriginalExtension());
        $image_name=$image_unique.".".$image_get_extention;
        $image_location ="Dashboard/Product/imgs/";
        $last_image_two=$image_location.$image_name;
        $image_two->move($image_location,$image_name);

        $image_three=$request->image_three;
        $image_unique=hexdec(uniqid());
        $image_get_extention=strtoupper($image->getClientOriginalExtension());
        $image_name=$image_unique.".".$image_get_extention;
        $image_location ="Dashboard/Product/imgs/";
        $last_image_three=$image_location.$image_name;
        $image_three->move($image_location,$image_name);
        Product::create([
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'subcategory_id'=>$request->subcategory_id,
            'product_name'=>$request->product_name,
            'product_quantity'=>$request->product_quantity,
            'proeduct_details'=>$request->proeduct_details,
            'product_color'=>collect($request->product_color),
            'product_size'=>collect($request->product_size),
            'selling_price'=>$request->selling_price,
            'discount_price'=>$request->discount_price,
            'video_link'=>$request->video_link,
            'main_slider'=>$request->main_slider,
            'product_code'=>$request->product_code,
            'best_rated'=>$request->best_rated,
            'hot_new'=>$request->hot_new,
            'status'=>1,
            'slug'=>Str::slug($request->product_name),

            "image_one"=>$last_image,
            "image_two"=>$last_image_two,
            "image_three"=>$last_image_three,
        ]);

        return redirect()->route("Product.index")->with("message","product added succeffuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $Product)
    {
        $categories =Category::all();
        $brands=Brand::all();
        return view("Dashboard.Product.edit",compact("Product","categories","brands"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $Product)
    {
        $old_image_one=$request->old_image_one;
        $old_image_two=$request->old_image_two;
        $old_image_three=$request->old_image_three;
        $image_one=$request->image_one;
        $image_two=$request->image_two;
        $image_three=$request->image_three;
        if($image_one)
        {
            $image_unique=hexdec(uniqid());
            $image_get_extention_one=strtoupper($image_one->getClientOriginalExtension());
            $image_name_one=$image_unique.".".$image_get_extention_one;
            $image_location ="Dashboard/Product/imgs/";
            $last_image_one=$image_location.$image_name_one;
            $image_one->move($image_location,$image_name_one);
            unlink($old_image_one);
            $Product->update(
                [
                    "image_one"=>$last_image_one,
                ]
                );
        }
        if($image_two)
        {
            $image_unique=hexdec(uniqid());
            $image_get_extention_two=strtoupper($image_two->getClientOriginalExtension());
            $image_name_two=$image_unique.".".$image_get_extention_two;
            $image_location ="Dashboard/Product/imgs/";
            $last_image_two=$image_location.$image_name_two;
            $image_two->move($image_location,$image_name_two);
            unlink($old_image_two);
        $Product->update([
            "image_two"=>$last_image_two,
        ]);
        }
        if($image_three)
        {
            $image_unique=hexdec(uniqid());
            $image_get_extention_three=strtoupper($image_three->getClientOriginalExtension());
            $image_name_three=$image_unique.".".$image_get_extention_three;
            $image_location ="Dashboard/Product/imgs/";
            $last_image_three=$image_location.$image_name_three;
            $image_three->move($image_location,$image_name_three);
            unlink($old_image_three);
            $Product->update([

                "image_three"=>$last_image_three,

            ]);
        }
        else{
            $Product->update([
                'category_id'=>$request->category_id,
                'brand_id'=>$request->brand_id,
                'subcategory_id'=>$request->subcategory_id,
                'product_name'=>$request->product_name,
                'product_quantity'=>$request->product_quantity,
                'proeduct_details'=>$request->proeduct_details,
                'product_color'=>collect($request->product_color),
                'product_size'=>collect($request->product_size),
                'selling_price'=>$request->selling_price,
                'discount_price'=>$request->discount_price,
                'video_link'=>$request->video_link,
                'main_slider'=>$request->main_slider,
                'product_code'=>$request->product_code,
                'best_rated'=>$request->best_rated,
                'hot_new'=>$request->hot_new,
                'slug'=>Str::slug($request->product_name),
            ]);
        }
        return redirect(route("Product.index"))->with("message","Product Edited Successfuly");
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $Product)
    {
        if(file_exists($Product->image_one && $Product->image_two && $Product->image_three))
        {
            unlink($Product->image_one);
            unlink($Product->image_two);
            unlink($Product->image_three);
        }
        $Product->delete();
        return redirect()->back()->with("warning","product Deleted succeffuly");

    }

    public function getSubCategory($category_id)
    {
     $subcat=DB::table('sub_categories')->where("category_id",$category_id)->get();
     return response()->json($subcat);
    }

    public function ActiveStatus(Product $Product)
    {
        $Product->update([
            "status"=>1
        ]);
        return redirect()->back()->with("message","Product Actived succeeffuly");

    }

    public function DeActiveStatus(Product $Product)
    {
        $Product->update([
            "status"=>0
        ]);
        return redirect()->back()->with("message","product DeActived succeeffuly");
    }

}
