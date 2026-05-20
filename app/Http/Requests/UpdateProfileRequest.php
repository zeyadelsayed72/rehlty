<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name'=> 'sometimes|string',
            'username'=> 'sometimes|string|unique:users,username,'. auth('api')->id(),
            'email'=> 'sometimes|email|unique:users,email,' . auth('api')->id(),
            'phone'=> 'sometimes|string|unique:users,phone,' . auth('api')->id(),
            'avatar'=> 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }


    public function messages()
    {
        return [
            'username.unique'=> 'اسم المستخدم مستخدم من قبل',
            'email.unique'=> 'البريد الإلكتروني مستخدم من قبل',
            'phone.unique'=> 'رقم الجوال مستخدم من قبل',
            'avatar.image'=> 'الصورة لازم تكون صورة',
            'avatar.max'=> 'حجم الصورة لازم يكون أقل من 2MB',
        ];
    }
}
