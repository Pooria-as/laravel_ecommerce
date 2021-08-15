<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            // "category_id"=>"required",
            // "brand_id"=>"required",
            // "subcategory_id"=>"required",
            // "product_name"=>"required",
            // "product_code"=>"required",
            // "product_quantity"=>"required",
            // "proeduct_details"=>"required",
            // "product_color"=>"required",
            // // "product_size"
            // "selling_price"=>"required",
            // // ,"discount_price"
            // // ,"video_link"
            //  "image_one"=>"required",
            // "image_two"=>"required",
            //  "image_three"=>"required",
            //  "status"=>"required"
        ];
    }
}
