<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlyProgramRequest extends FormRequest
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
            'FlyType' => 'required|integer|max:2',
            'FlydateFA'=> 'required|string|max:10',
            'FlydateEN'=> 'required|string|max:10',
            'Airlines_id'=> 'required|integer',
            'Route_id'=> 'required|integer',
            'AircraftDetail_id'=> 'required|integer',
            'FlyNo'=> 'required|integer',
            'Price'=>'required',
            'luggageRules_id'=> 'required|integer',
            'FlyTime_at'=> 'required|string|max:5',
            'DepartureTime_at' => 'required|string|max:5',
            'ArrivalTimeLocal_at' => 'required|string|max:5',
            'Chair_avilable' => 'required|integer'
            
        ];
    }
}
