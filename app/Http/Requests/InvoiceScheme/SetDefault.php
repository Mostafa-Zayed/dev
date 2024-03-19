<?php

namespace App\Http\Requests\InvoiceScheme;

use Illuminate\Foundation\Http\FormRequest;

class SetDefault extends FormRequest
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
        $this->merge([
            'business_id' => $this->session()->get('user.business_id')
        ]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id' => ['required','numeric','exists:invoice_schemes,id'],
            'business_id'  => ['required','exists:business,id']
        ];
    }
}
