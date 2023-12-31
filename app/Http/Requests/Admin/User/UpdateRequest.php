<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,'.$this->user->id,
            'password' => 'nullable|string',
            'role' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Пожалуйста укажите "Имя пользователя"',
            'email.required' => 'Пожалуйста укажите "E-mail"',
            'email.email' => 'Не верно указан E-mail"',
            'email.unique' => 'Пользователь с таким E-mail адресом уже существует',
        ];
    }
}
