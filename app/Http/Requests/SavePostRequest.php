<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
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
        // Aquí definimos las reglas de validación para el formulario de creación y edición de posts
        // if ($this->isMethod('PUT')) {
        //     // Reglas para crear un nuevo post
        //     return [
        //         'title' => ['required', 'string', 'min:8'],
        //         'body' => ['required', 'string'],
        //     ];
        // }
        return [
            'title' => ['required', 'string', 'min:4'],
            'body' => ['required', 'string'],
        ];
    }
}
