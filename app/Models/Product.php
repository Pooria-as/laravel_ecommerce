<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
   protected $fillable=["category_id","brand_id","subcategory_id","product_name","product_code","product_quantity","proeduct_details","product_color","product_size","selling_price","discount_price","video_link","main_slider","hot_deal","mid_slider","best_rated","hot_new","trend","image_one","image_two","image_three","status","slug"];


   public function brand()
   {
       return $this->belongsTo(Brand::class);
   }

   public function category()
   {
       return $this->belongsTo(Category::class);
   }
   public function ActiveOrInActiveStatus($product)
   {
       if($product->status==1)
       {
        return '<span class="badge badge-success">Active</span>';
       }
       else
       {
        return' <span class="badge badge-danger">Deactive</span>';

       }
   }
//    public function ActiveProduct(Product $Product)
//    {
//        if($Product->status==1)
//        {
//            $ActiveStatus=route("activeStatus",$Product->id);
//       return   '<a href="{$ActiveStatus}" class="btn btn-sm btn-danger"><i class="fa fa-thumbs-down"></i></a>';
//        }
//        else
//        {
//         $DeActiveStatus=route("DeActiveStatus",$Product->id);

//        return '<a href="{$DeActiveStatus}" class="btn btn-sm btn-success"><i class="fa fa-thumbs-up"></i></a>';
//        }




}
