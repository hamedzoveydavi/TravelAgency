<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'CompanyName_FA' => 'required|string|max:255|min:5',
            'CompanyName_EN' => 'required|string|max:255|min:5',
            'ManagerName_FA' => 'required|string|max:255|min:5',
            'ManagerName_EN' => 'required|string|max:255|min:5',
            'Register_No' => 'required|integer|min:4',
            'Company_Email' => 'required|email|min:4',
            'Company_Logo' => 'required|string|min:4',
            'Company_Address' => 'required|string|max:255',
            'Tel' => 'required|string|max:14',
            'Fax' => 'required|string|min:10|max:14',
                        
        ];
    }
}
