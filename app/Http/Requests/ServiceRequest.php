<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'short_title' => 'required|max:50',
            'title' => 'required|max:255',
            'excerpt' => 'required|max:300',
            'description' => 'required',
            'image' => 'nullable'
        ];

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['image'] = 'nullable';
        }

        return $rules;
    }
}
