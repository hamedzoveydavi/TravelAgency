<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Refund_rulesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'PassengerType'=>'required|string|max:3|min:2',
            'PeriodOfTime'=>'required|string|max:2|min:1',
            'TypeOfTime'=>'required|string|max:2|min:1',
            'Penalty'=>'required|integer|max:3|min:1',
        ];
    }
}
