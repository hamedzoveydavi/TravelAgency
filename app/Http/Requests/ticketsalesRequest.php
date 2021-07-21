<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ticketsalesRequest extends FormRequest
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
            'Name'=>'required|string|max:100',
            'Family'=>'required|string|max:150',
            'Nationality'=>'required|string|max:15',
            'National_Code'=>'required|string|max:10',
            'Passport_No'=>'required|string|max:15',
            'Passport_ExpireDate'=>'required|string|max:10'
        ];
    }
}
