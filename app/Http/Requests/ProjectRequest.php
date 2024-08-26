<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|url|max:255',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'title' => Str::title($this->title),
            'description' => strip_tags($this->description),
            'url' => $this->url ? filter_var($this->url, FILTER_SANITIZE_URL) : null,
        ]);

        if ($this->hasFile('image')) {
            $this->except('image');
        }
    }
}
