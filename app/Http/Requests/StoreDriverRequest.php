<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDriverRequest extends FormRequest
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
            'input-dni' => 'required|max: 8',
            'input-name' => 'required|max: 10',
            'input-lastname' => 'required|max: 10',
            'input-birthdate' => 'required',
            'input-destination' => 'required|max: 10',
            //'input-date' => 'required|max: 40',
            //'input-time' => 'required|max: 40',
            'input-price' => 'required|max: 40'
        ];
    }
}
