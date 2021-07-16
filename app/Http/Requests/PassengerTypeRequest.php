<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassengerTypeRequest extends FormRequest
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
            'PassengerType'=>'required|string|max:3',
            'From_Age'=>'required|integer|max:100',
            'To_Age'=>'required|integer|max:100',
            'Discount'=>'required|integer|max:100'
                   ];
    }
}
