<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|string|unique:users|max:200',
            'name' => 'required|string|max:225',
            'email' => 'required|email|unique:users|max:200',
            'phone' => 'nullable|string|unique:users',
            'password' => 'required|min:8|max:50|confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'اسم المستخدم مطلوب',
            'username.unique' => 'اسم المستخدم مستخدم من قبل',
            'username.max' => 'اسم المستخدم طويل جدًا',

            'name.required' => 'الاسم بالكامل مطلوب',
            'name.max' => 'الاسم طويل جدًا',

            'email.required' => 'البريد الإلكتروني مطلوب ',
            'email.unique' => 'البريد الإلكتروني مستخدم من قبل',

            'phone.unique' => 'رقم الجوال مستخدم من قبل',
            'phone.required_without' => 'رقم الجوال أو البريد الإلكتروني مطلوب',

            'password.required' => 'كلمة المرور مطلوبة',
            'password.min' => 'كلمة المرور يجب ان تكون 8 أحرف على الأقل',
            'password.max' => 'كلمة المرور طويلة جدًا',
            'password.confirmed' => 'كلمة المرور غير متطابقة',

            'avatar.image' => 'الملف المرفوع يجب أن يكون صورة',
            'avatar.mimes' => 'الصورة يجب أن تكون بصيغة jpeg أو png أو jpg',
            'avatar.max' => 'حجم الصورة يجب أن يكون أقل من 2MB',
        ];
    }
}
