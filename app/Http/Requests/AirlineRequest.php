<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirlineRequest extends FormRequest
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
            'AirlineFA'=> 'required|string|unique:airlines',
            'AirlineEN'=> 'required|string',
            'Symbol'=> 'required|string|max:6|unique:airlines',
            'logo'=> 'required|string|max:100'
        ];
    }
}
