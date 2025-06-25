<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreEdictRequest extends FormRequest
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
        dd($this->all());
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:edicts,slug',
            'content' => 'required|string',
            'publish_date' => 'nullable|date',
            'is_active' => 'boolean',
            'user_id' => 'required|exists:users,id',
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
            'user_id.required' => 'El usuario es obligatorio.',
            'user_id.exists' => 'El usuario no existe.',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'is_active' => $this->has('is_active'),
            'slug' => Str::slug($this->input('title')) . '-' . Str::random(5),
            'user_id' => auth()->user()->id,
        ]);
    }
}
