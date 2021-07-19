<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlyRouteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'SourceFa'=>'required|string|max:30|min:3',
            'SourceEN'=>'required|string|max:30|min:3',
            'Source_Symbol'=>'required|string|max:3|min:2',
            'DestinationFa'=>'required|string|max:30|min:3',
            'DestinationEN'=>'required|string|max:30|min:3',
            'Destination_Symbol'=>'required|string|max:3|min:2',

        ];
    }
}
