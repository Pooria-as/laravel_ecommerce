<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCategoryValidation;
use App\Models\Post_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCategories=Post_Category::all();
        return view("Dashboard.blog.Category.index",compact("blogCategories"));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCategoryValidation $request)
    {
        Post_Category::create($request->all());
        return redirect()->route("BlogCategory.index")->with("message","category created Successfully");

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $BlogCategory=Post_Category::find($id);
        return view("Dashboard.blog.Category.edit",compact("BlogCategory"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogCategoryValidation $request, $id)
    {
         $BlogCategory=Post_Category::find($id);
        $BlogCategory->update($request->all());
        return redirect()->route("BlogCategory.index")->with("info","category Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=DB::table('post__categories')->where("id",$id)->delete();
        return back()->with("warning","category Deleted Successfully");


    }
}
