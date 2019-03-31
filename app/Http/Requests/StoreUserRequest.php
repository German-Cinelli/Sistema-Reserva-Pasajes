<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'input-name' => 'required|max: 40',
            'input-lastname' => 'required|max: 40',
            'input-dni' => 'required',
            'input-departament' => 'required|max: 40',
            'input-location' => 'required|max: 40',
            'input-address' => 'required|max: 40',
            'input-number' => 'required|max: 40',
            'input-apartament' => 'required|max: 40',
            'input-email' => 'required',
            'input-password' => 'required',
        ];
    }
}
