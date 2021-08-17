<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidation extends FormRequest
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
            "category_id"=>"required",
            "post_title_EN"=>"required",
            "post_title_FA"=>"required",
            // "post_image"=>"required",
            "details_EN"=>"required",
            "details_FA"=>"required",
        ];
    }
}
