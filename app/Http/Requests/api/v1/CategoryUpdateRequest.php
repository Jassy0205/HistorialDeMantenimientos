<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'name' => 'max:150|min:10|unique:categories,name|string', #|alpha:asc
        ];
    }

    public function messages(): array
    {
        return [
            'name.min' => 'El campo nombre debe tener una longitud minima de 10 dígitos',
        ];
    }
}
