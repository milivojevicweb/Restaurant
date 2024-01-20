<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            "name" => "required|min:3|max:1000",
            "price" => "required|numeric",
            "category" => "not_in:0",
            "alt" => "required|min:3|max:1000",
            "image" => "nullable|mimes:jpg,jpeg,gif,png|max:3000",
            "text" => "required|min:3|max:2000",
            "id"=>[ "required", "regex:/^[0-9]+$/" ]
        ];
    }
    public function messages()
    {
        return [
            "required" => "Field :attribute error."
        ];

    }
}
