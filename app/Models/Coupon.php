<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable=['coupon',"discount"];
    public static function Store($coupon_code,$coupon_discount)
    {
        Coupon::create([
            "coupon"=>$coupon_code,
            "discount"=>$coupon_discount
        ]);
    }
}
