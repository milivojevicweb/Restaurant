<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            "people" => "required|not_in:0",
            "time" => "required|not_in:0",
            "dataTime" => "required|date_format:Y-m-d"

        ];
    }

    public function messages(){
        return [
            "required" => "Field :attribute error."
        ];
    }
}
