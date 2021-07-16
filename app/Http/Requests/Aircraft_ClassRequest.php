<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Aircraft_ClassRequest extends FormRequest
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
            'Class_Name'=>'required|string|max:15|min:4',
            'Class_Symbol'=>'required|string|max:1'
        ];
    }
}
