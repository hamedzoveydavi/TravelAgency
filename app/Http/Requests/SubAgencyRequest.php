<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubAgencyRequest extends FormRequest
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
            'SubAgency_NameFA'=> 'required|string|max:255|min:5',
            'SubAgency_NameEN'=>  'required|string|max:255|min:5',
            'SubAgency_ManagerNameFA'=>  'required|string|max:50|min:5',
            'SubAgency_ManagerNameEN'=> 'required|string|max:50|min:5',
            'SubAgency_RegisterNo'=> 'required|string|max:10|min:4',
            'SubAgency_Email'=> 'required|email',
            'SubAgency_Address'=>  'string|max:255|min:5',
            'SubAgency_Logo'=>  'string|size:512',
            'SubAgency_Tel'=>   'required|min:10',
            'SubAgency_Fax'=>   'required|min:10',
        ];
    }
}
