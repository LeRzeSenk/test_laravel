<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'code' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для ввода.',
            'min' => 'Поле :attribute должно быть не меньше :min символов.',
            'max' => 'Поле :attribute должно быть не больше :max символов.',
            'code.min' => 'Поле код должно быть не меньше :min символов.',
            'code.max' => 'Поле код должно быть не больше :min символов.',
        ];
    }
}
