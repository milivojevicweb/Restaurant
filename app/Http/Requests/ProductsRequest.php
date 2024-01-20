<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            "productName" => "required|min:3|max:1000",
            "productPrice" => "required|numeric",
            "productCategory" => "not_in:0",
            "alt" => "required|min:3|max:1000",
            "image" => "required|mimes:jpg,jpeg,gif,png|max:3000",
            "productsText" => "required|min:3|max:2000",
        ];
    }
    public function messages()
    {
        return [
            "required" => "Field :attribute error."
        ];

    }
}
