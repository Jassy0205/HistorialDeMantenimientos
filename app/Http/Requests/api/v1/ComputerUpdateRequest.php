<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ComputerUpdateRequest extends FormRequest
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
            'name' => 'unique:computers,name|max:10|min:4|string', #|alpha:asc
            'brand' => 'string|min:2|max:20', #|alpha_dash|alpha_num
            'cpu' => 'string|max:15|min:7',
            'ram' => 'digits:2'
        ];
    }

    public function messages(): array
    {
        return [
            'name.min' => 'El campo nombre debe tener una longitud minima de 4 dígitos',
            'brand.min' => 'El campo marca debe tener una longitud minima de 2 dígitos',
            'ram.min' => 'El campo ram debe tener una longitud exacta de 2 dígitos',
        ];
    }
}
