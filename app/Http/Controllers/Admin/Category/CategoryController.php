<?php

namespace App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryValidation;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $categories=Category::all();

        return view("Dashboard.Category.index",compact("categories"));
    }

    public function store(CategoryValidation $request)
    {
        Category::create($request->all());
        return redirect()->route("Category.index")->with("message","category added Successfully");
    }

    public function edit(Category $Category)
    {
         return view("Dashboard.Category.edit",compact("Category"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryValidation $request,Category $Category)
    {
        $Category->update($request->all());
            return redirect()->route("Category.index")->with("info","category Edited Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $Category)
    {
        $Category->delete();
        return redirect()->route("Category.index")->with("warning","category Deleted Successfully");

    }
}
