<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Passengerluggage_rulesRequest extends FormRequest
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
        'NumberOfLuggage'=>'required|integer|max:1',
        'LuggageWeight'=>'required|integer|max:2',
        'NumberOfhandbag'=>'required|integer|max:1',
        'handbagWeight'=>'required|string|max:2',
        ];
    }
}
