<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Pricing_policy_Request extends FormRequest
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
            'SeatNo_from'=> 'required|integer|max:3|min:1',
            'SeatNO_TO'=> 'required|integer|max:3|min:1',
            'Price_Percentage'=> 'required|integer|max:2|min:1',
        ];
    }
}
