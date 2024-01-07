<?php

namespace Modules\Website\Http\Requests\Demos;

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
            'name.*' => ['required','string','unique:website_demos,id'],
            'image' => ['nullable','image'],
            'website_slider_id' => ['required','exists:website_sliders,id']
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
