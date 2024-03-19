<?php

namespace App\Http\Requests\InvoiceScheme;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'scheme_type'  => ['required','in:blank,year','string','max:255'],
            'name'         => ['required','string','max:255'],
            'prefix'       => ['nullable','string','max:255'],
            'start_number' => ['nullable','numeric','gt:-1'],
            'total_digits' => ['nullable','numeric','gt:0'],
            'is_default'   => ['nullable','in:0,1'],
            'business_id'  => ['required','exists:business,id']
        ];
    }
}
