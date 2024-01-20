<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            "header" => [ "required", "regex:/([A-ZŽŠĐČĆ]|[a-zžšđčć]+\s)+/" ],
            "description" => [ "required", "regex:/([A-ZŽŠĐČĆ][a-zžšđčć]+\s)+/" ],
            "alt"=>"required|min:3|max:1000",
            "summary-ckeditor"=>"required|min:6|max:10000",
            "image" => "required|mimes:jpg,jpeg,gif,png|max:3000",
        ];
    }

    public function messages(){
        return [
            "required" => "Field :attribute error."
        ];
    }
}
