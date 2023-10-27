<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ComputerStoreRequest extends FormRequest
{
     /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:10|unique:computers,name|min:4|string', #|alpha:asc
            'brand' => 'required|string|min:2|max:20', #|alpha_dash|alpha_num
            'cpu' => 'required|string|max:15|min:7',
            'ram' => 'required|digits:1,2'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.min' => 'El campo nombre debe tener una longitud minima de 4 dígitos',
            'brand.required' => 'El campo marca es requerido',
            'brand.min' => 'El campo marca debe tener una longitud minima de 2 dígitos',
            'ram.required' => 'El campo ram es requerido',
            'ram.digits' => 'El campo ram debe tener una longitud minima de 1, y maxima de 2 dígitos',

        ];
    }
}
