<?php

namespace App\Http\Requests\Business\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

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

    public function prepareForValidation()
    {
        if($this->language && $this->language == 'ar'){
            App::setlocale('ar');
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'accept_conditions' => ['required', 'in:on', 'max:255'],
            'name' => ['required','string','regex:/^[A-Za-z\s]*$/i','min:3','max:255'],
            'contact_no' => ['required', 'numeric','digits_between:3,15','regex:/^[0-9]*$/i'],
            'first_name' => ['required', 'string', 'max:255', 'min:3','regex:/^[A-Za-z\s]*$/i'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'max:255', 'min:8', 'confirmed'],
            'currency_id' => ['required', 'integer','exists:currencies,id'],
            'package' => ['nullable','exists:packages,id'],
            'language' => ['nullable']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('validation.required', ['attribute' => __('business.business_name')]),
            'email.email' => __('validation.email', ['attribute' => __('business.email')]),
            'contact_no.required' => __('validation.required',['attribute' => __('lang_v1.business_telephone')]),
            'contact_no.numeric' => __('validation.numeric',['attribute' => __('lang_v1.business_telephone')]),
            'email.unique' => __('validation.unique', ['attribute' => __('business.email')]),
            'password.required' => __('validation.required', ['attribute' => __('business.password')]),
            'password.min' => __('validation.min', ['attribute' => __('business.password')]),
            'password.confirmed' => __('validation.confirmed',['arrtibute' => __('business.password')]) ,
            'accept_conditions.required' => __('validation.accept_conditions'),
            'accept_conditions.on' => __('validation.accept_conditions'),
        ];
    }

    public function attributes()
    {
        return [
            'contact_no' =>  __('lang_v1.business_telephone')
        ];
    }
}
