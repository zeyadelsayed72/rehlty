<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdRequest extends FormRequest
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

            'title_ar'=> 'sometimes|string',
            'title_en'=> 'sometimes|string',
            'description_ar'=> 'nullable|string',
            'description_en'=> 'nullable|string',
            'price'=> 'nullable|numeric|min:0',
            'show_price'=> 'boolean',
            'type'=> 'in:normal,featured',
            'image'=> 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'whatsapp'=> 'nullable|string',
            'phone'=> 'nullable|string',
            'category_id'=> 'nullable|exists:categories,id',
            'city_id'=> 'nullable|exists:cities,id',
        ];
    }
}
