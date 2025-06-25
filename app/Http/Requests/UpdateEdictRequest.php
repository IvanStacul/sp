<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEdictRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:edicts,slug,' . $this->edict->id,
            'content' => 'required|string',
            'publish_date' => 'nullable|date',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'El título es obligatorio.',
            'slug.required' => 'El slug es obligatorio.',
            'slug.unique' => 'Este slug ya está en uso.',
            'content.required' => 'El contenido es obligatorio.',
            'publish_date.date' => 'La fecha de publicación debe ser válida.',
        ];
    }
}
