<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandValidation;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function index()
    {
        $Brands=Brand::all();
        return view("Dashboard.Brand.index",compact("Brands"));
    }

    public function store(BrandValidation $request)
    {
        Brand::store($request->Brand_name,$request->Brand_logo);
        return redirect()->route("Brand.index")->with("message","Brand added Successfully");

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $Brand)
    {
        return view("Dashboard.Brand.edit",compact("Brand"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Brand $Brand)
     {

        $old_image=$request->old_image;
        $image=$request->Brand_logo;
        if($image){
        $image_unique=hexdec(uniqid());
        $image_get_extention=strtoupper($image->getClientOriginalExtension());
        $image_name=$image_unique.".".$image_get_extention;
        $image_location ="Images/Posts/";
        $last_image=$image_location.$image_name;
        $image->move($image_location,$image_name);
        unlink($old_image);
        $Brand->update([
            "Brand_name"=>$request->Brand_name,
            "Brand_logo"=>$last_image,
        ]);
    }
      else{
        $Brand->update([
            "Brand_name"=>$request->Brand_name,
        ]);
    }
    return redirect(route("Brand.index"))->with("message","Brand Updated successfully");
}

    public function destroy(Brand $Brand)
    {
        $Brand->delete();

          return redirect()->route("Brand.index")->with("warning","Brand Deleted Successfully");

    }
}
