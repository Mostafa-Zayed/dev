<?php

namespace App\Http\Requests\BusinessLocation;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    public function prepareForValidation()
    {
        $this->merge([
            'business_id' => $this->session()->get('user.business_id')
        ]);
    }
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
            'business_id' => ['required','integer','exists:business,id'],
            'name' => ['required','string','min:3','max:255'],
            'location_id' => ['nullable','string','max:255'],
            'landmark' => ['nullable','string','max:255'],
            'city'    => ['nullable','string','regex:/^[A-Za-z]*$/i'],
            'country' => ['nullable','string','regex:/^[A-Za-z]*$/i'],
            'state'  => ['nullable','string','regex:/^[A-Za-z]*$/i'],
            'zip_code' => ['nullable','numeric','regex:/^[0-9]*$/i'],
            'mobile'   => ['nullable','numeric','regex:/^[0-9]*$/'],
            'alternate_number' => ['nullable','numeric','regex:/^[0-9]*$/i'],
            'email'            => ['nullable','string','email','max:100'],
            'website'   => ['nullable','string','max:255'],
            'invoice_scheme_id' => ['required','integer','exists:invoice_schemes,id'],
            'invoice_layout_id'  => ['required','integer','exists:invoice_layouts,id'],
            'sale_invoice_layout_id' => ['nullable','integer','exists:invoice_layouts,id'],
            'selling_price_group_id'  => ['nullable','integer','exists:selling_price_groups,id'],
            'custom_field1'  => ['nullable','string','max:255'],
            'custom_field2'  => ['nullable','string','max:255'],
            'custom_field3'  => ['nullable','string','max:255'],
            'custom_field4'  => ['nullable','string','max:255'],
            'default_payment_accounts' => ['nullable','array']
        ];
    }

    public function attributes()
    {
        return [
            'name' => __( 'invoice.name' ),
            'location_id' => __( 'lang_v1.location_id' ),
            'landmark'  => __( 'business.landmark' ),
            'city'   => __( 'business.city' ),
            'country' => __('business.country'),
            'state'   => __('business.state'),
            'zip_code' => __('business.zip_code'),
            'mobile'   => __('business.mobile'),
            'alternate_number'  => __('business.alternate_number'),
            'email' => __('business.email'),
            'website' => __('lang_v1.website'),
            'invoice_scheme_id' => __('lang_v1.invoice_scheme'),
            'invoice_layout_id' => __('lang_v1.invoice_layout'),
            'sale_invoice_layout_id' => __('lang_v1.invoice_layout_for_sale'),
            'selling_price_group_id' => __('lang_v1.default_selling_price_group'),
            'custom_field1'  => __('lang_v1.customelocation_custom_field1'),
            'custom_field2'  => __('lang_v1.customelocation_custom_field2'),
            'custom_field3'  => __('lang_v1.customelocation_custom_field3'),
            'custom_field4'  => __('lang_v1.customelocation_custom_field4'),
            'default_payment_accounts' => __('lang_v1.default_accounts')
        ];
    }
}
