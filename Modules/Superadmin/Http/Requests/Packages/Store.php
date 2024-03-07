<?php

namespace Modules\Superadmin\Http\Requests\Packages;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required','array'],
            'description' => ['required','array'],
            'location_count' => ['required','numeric'],
            'user_count' => ['required','numeric'],
            'product_count' => ['required','numeric'],
            'invoice_count' => ['required','numeric']
        ];
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
}
