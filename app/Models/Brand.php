<?php

namespace App\Models;

use App\Http\Requests\BrandValidation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brand extends Model
{
    protected $fillable=["Brand_name","Brand_logo"];

    public static function store($brand_name,$brand_logo)
    {
        $image=$brand_logo;
        $image_unique=hexdec(uniqid());
        $image_get_extention=strtoupper($image->getClientOriginalExtension());
        $image_name=$image_unique.".".$image_get_extention;
        $image_location ="Dashboard/Brand/";
        $last_image=$image_location.$image_name;
        $image->move($image_location,$image_name);
        Brand::create([
            "Brand_name"=>$brand_name,
            "Brand_logo"=>$last_image,
        ]);
    }



















}
