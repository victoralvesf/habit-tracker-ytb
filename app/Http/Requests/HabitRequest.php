<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo é obrigatorio',
            'name.max' => 'Deve ter no máximo 255 caracteres',
            'name.string' => 'Deve ser texto',
        ];
    }
}
