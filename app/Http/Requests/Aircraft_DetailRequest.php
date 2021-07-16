<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Aircraft_DetailRequest extends FormRequest
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
        'Type_Name'=>'required|string|max:10',
        'Class_Name'=>'required|string|max:1',
        'Total_Chair'=>'required|integer|max:4'
        ];
    }
}
