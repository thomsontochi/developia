<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0|max:999999.99',
            'duration' => 'nullable|regex:/^(?:\d+[hm])+$/',
            'category' => 'required|string|max:100',
            'icon_class' => 'nullable|string|max:100',
            // 'is_active' => 'boolean|nullable',
            'remove_image' => 'nullable|boolean',
        ];
    
        // if ($this->isMethod('post') || $this->hasFile('image')) {
        //     $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        // } else {
        //     $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048';
        // }
    
        return $rules;
    }
}
