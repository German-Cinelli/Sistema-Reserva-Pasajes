<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusRequest extends FormRequest
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
            'input-plate' => 'required|max: 10',
            'input-model' => 'required|max: 10',
            'input-year' => 'required|max: 40',
            'input-capacity' => 'required|max: 40'
        ];
    }
}
