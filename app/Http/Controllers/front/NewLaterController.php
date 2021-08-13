<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsLaterValidation;
use App\Models\NewsLater;
use Illuminate\Http\Request;

class NewLaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsLaters=NewsLater::all();
        return view("Dashboard.NewsLater.index",compact("newsLaters"));

    }

    public function store(NewsLaterValidation $request)
    {
        NewsLater::create($request->all());

        return redirect(route("index"))->with("message","You'r Request Added successfuly");
    }


    public function destroy(NewsLater $NewLater)
    {
        $NewLater->delete();
        return back()->with("warning","Request Removed successfuly");
    }
}
