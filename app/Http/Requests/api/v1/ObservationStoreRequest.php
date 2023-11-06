<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ObservationStoreRequest extends FormRequest
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
            'message' => 'required|max:300|min:4|string', #|alpha:asc
            'category' => 'required|digits:1,2'
        ];
    }

    public function messages(): array
    {
        return [
            'message.required' => 'El campo mensaje es requerido',
            'message.min' => 'El campo nombre debe tener una longitud minima de 4 dígitos',
            'category.required' => 'El campo categoria es requerido',
            'category.digits' => 'El campo categoria debe tener una longitud de 1 dígito'
        ];
    }
}
