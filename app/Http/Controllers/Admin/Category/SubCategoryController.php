<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubcategoryValidation;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Subcategories=SubCategory::all();
        $Categories=Category::all();
        return view("Dashboard.Subcategory.index",compact("Subcategories","Categories"));
    }


    public function store(Request $request)
    {

        SubCategory::Store($request->category_id,$request->SubCategory_name);
        return redirect(route("SubCategory.index"))->with("message","SubCategory created successfully");

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $SubCategory)
    {
        $categories=Category::all();
        return view("Dashboard.Subcategory.edit",compact("categories","SubCategory"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,SubCategory $SubCategory)
    {
        $SubCategory->update([
            "SubCategory_name"=>$request->SubCategory_name,
            "category_id"=>$request->category_id
        ]);
        return redirect(route("SubCategory.index"))->with("info","Subcategory updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $SubCategory)
    {
        $SubCategory->delete();
        return redirect(route("SubCategory.index"))->with("warning","Subcategory Deleted");

    }
}
