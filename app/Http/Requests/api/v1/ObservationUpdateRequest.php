<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ObservationUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'message' => 'max:300|min:4|string', #|alpha:asc
            'category' => 'digits:1,2',
            'owner' => 'digits:1,2',
        ];
    }

    public function messages(): array
    {
        return [
            'message.min' => 'El campo nombre debe tener una longitud minima de 4 dígitos',
            'category.digits' => 'El campo categoria debe tener una longitud minima de 1, y maxima de 2 dígitos',
        ];
    }
}
