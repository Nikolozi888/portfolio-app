<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        $rules = [
            'title' => 'required',
            'excerpt' => 'required|max:500',
            'description' => 'required',
            'author' => 'required',
            'image' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|exists:tags,id',
        ];

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['image'] = 'nullable';
        }

        return $rules;
    }
}
