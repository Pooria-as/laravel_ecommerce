<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponValidation;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons=Coupon::all();
        return view("Dashboard.Coupon.index",compact("coupons"));
    }




    public function store(CouponValidation $request)
    {
        Coupon::Store($request->coupon,$request->discount);
        return redirect()->route("Coupon.index")->with("message","Coupon added Successfully");

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
    public function edit(Coupon $Coupon)
    {
        return view("Dashboard.Coupon.edit",compact("Coupon"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponValidation $request, Coupon $Coupon)
    {
        $Coupon->update($request->all());
        return redirect()->route("Coupon.index")->with("info","Coupon Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $Coupon)
    {
        $Coupon->delete();
        return redirect()->back()->with("warning","Coupon deleted Successfully");

    }
}
