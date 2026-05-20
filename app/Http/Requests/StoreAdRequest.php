<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Override;

class StoreAdRequest extends FormRequest
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
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'nullable|string|max:255',
            'description_en' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'show_price' => 'boolean',
            'type' => 'in:normal,featured',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'whatsapp' => 'nullable|string',
            'phone' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'city_id' => 'nullable|exists:cities,id',
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required'=> 'اسم الإعلان بالعربي مطلوب',
            'title_en.required'=> 'اسم الإعلان بالإنجليزي مطلوب',
            'price.numeric'=> 'السعر لازم يكون رقم',
            'price.min'=> 'السعر لازم يكون أكبر من 0',
            'image.image'=> 'الصورة لازم تكون صورة',
            'image.max'=> 'حجم الصورة لازم يكون أقل من 2MB',
            'category_id.exists'=> 'التصنيف مش موجود',
            'city_id.exists'=> 'المدينة مش موجودة',
        ];
    }
}
