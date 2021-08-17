<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostValidation;
use App\Models\Post;
use App\Models\Post_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=DB::table('posts')
        ->join("post__categories","posts.category_id","post__categories.id")
        ->select("posts.*","post__categories.category_name_EN","post__categories.category_name_FA")
        ->get();
        return view("Dashboard.blog.post.index",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Post_Category::all();
        return view("Dashboard.blog.post.create",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostValidation $request)
    {
        $image=$request->post_image;
        $image_unique=hexdec(uniqid());
        $image_get_extention=strtoupper($image->getClientOriginalExtension());
        $image_name=$image_unique.".".$image_get_extention;
        $image_location ="Dashboard/Post/";
        $last_image=$image_location.$image_name;
        $image->move($image_location,$image_name);
        Post::create([
            "category_id"=>$request->category_id,
            "post_title_EN"=>$request->post_title_EN,
            "post_title_FA"=>$request->post_title_FA,
            "details_EN"=>$request->details_EN,
            "details_FA"=>$request->details_FA,
            "post_image"=>$last_image,
        ]);

        return redirect()->route("Post.index")->with("message","Post Created Successfully");

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $Post)
    {
        $categories=Post_Category::all();
        return view("Dashboard.blog.post.edit",compact("Post","categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostValidation $request,Post $Post)
    {

        $old_image=$request->old_image;
        $image=$request->Brand_lpost_imageogo;
        if($image){
        $image_unique=hexdec(uniqid());
        $image_get_extention=strtoupper($image->getClientOriginalExtension());
        $image_name=$image_unique.".".$image_get_extention;
        $image_location ="Dashboard/Post/";
        $last_image=$image_location.$image_name;
        $image->move($image_location,$image_name);
        unlink($old_image);
        $Post->update([
            "category_id"=>$request->category_id,
            "post_title_EN"=>$request->post_title_EN,
            "post_title_FA"=>$request->post_title_FA,
            "details_EN"=>$request->details_EN,
            "details_FA"=>$request->details_FA,
            "post_image"=>$last_image,
        ]);
    }
      else{
        $Post->update([
            "category_id"=>$request->category_id,
            "post_title_EN"=>$request->post_title_EN,
            "post_title_FA"=>$request->post_title_FA,
            "details_EN"=>$request->details_EN,
            "details_FA"=>$request->details_FA,
        ]);

    }
    return redirect(route("Post.index"))->with("info","Post Updated successfully");
    }

    public function destroy(Post $Post)
    {
        $Post->delete();
        return redirect()->route("Post.index")->with("warning","Post Deleted Successfully");
    }
}
