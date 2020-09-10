<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClientRequest extends FormRequest
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
            //'name' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:6|max:100'
        ];
    }
    /**
     *Get the validation errors an return.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'min' => 'Campo :attribute deve ter no mínimo :min caracters',
            'required' => 'O campo :attribute é obrigatório',
            'max' => 'Campo :attribute pode ter no máximo :max',

        ];
    }
}
