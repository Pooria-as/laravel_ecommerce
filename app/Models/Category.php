<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable=['Category_name'];



    public function SubCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function Product()
    {
        return $this->hasMany(Product::class);
    }

}
