<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
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
            "status" => "not_in:0",
            "id"=>[ "required", "regex:/^[0-9]+/" ]

        ];
    }
    public function messages(){
        return [
            "required" => "Field :attribute error."
        ];
    }
}
