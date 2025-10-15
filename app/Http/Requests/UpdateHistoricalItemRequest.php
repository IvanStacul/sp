<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHistoricalItemRequest extends FormRequest
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
            'category_id' => ['nullable', 'exists:historical_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:5120'],
            'pdfs.*' => ['nullable', 'mimes:pdf', 'max:10240'],
            'delete_files' => ['nullable', 'array'],
            'delete_files.*' => ['exists:historical_item_files,id'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'featured' => ['boolean'],
            'is_active' => ['boolean'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'category_id' => 'categoría',
            'title' => 'título',
            'description' => 'descripción',
            'content' => 'contenido',
            'image' => 'imagen',
            'pdfs.*' => 'archivos PDF',
            'delete_files' => 'archivos a eliminar',
            'sort_order' => 'orden',
            'featured' => 'destacado',
            'is_active' => 'activo',
        ];
    }
}
