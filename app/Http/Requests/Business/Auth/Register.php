<?php

namespace App\Http\Requests\Business\Auth;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'accept_conditions' => ['required','in:on','max:255'],
            'name' => ['required','string','min:3','max:255'],
            'mobile1' => ['nullable','numeric'],
            'first_name' => ['required','string','max:255','min:3'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','string','max:255','min:8','confirmed'],
            'currency_id' => ['required','exists:currencies,id'],

        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('validation.required', ['attribute' => __('business.business_name')]),
        ];
    }
}
