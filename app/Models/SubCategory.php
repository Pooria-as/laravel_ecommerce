<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable=['category_id','SubCategory_name'];

    /**
     * Get the user that owns the SubCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public static function Store($category,$subcategory)
    {
        SubCategory::create(
            [
                "category_id"=>$category,
                "SubCategory_name"=>$subcategory
            ]
        );
    }

}
