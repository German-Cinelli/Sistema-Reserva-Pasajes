<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTravelRequest extends FormRequest
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
            'input-origin' => 'required|max: 40',
            'input-destination' => 'required|max: 40',
            'input-datetime' => 'required',
            //'input-time' => 'required|max: 40',
            'input-price' => 'required|max: 40'
        ];
    }
}
