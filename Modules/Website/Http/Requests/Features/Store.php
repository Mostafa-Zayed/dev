<?php

namespace Modules\Website\Http\Requests\Features;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    public function prepareForValidation()
    {
        $this->merge(['number' => rand(1,22522452)]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'number' => ['nullable','numeric'],
            'name' => ['required','array'],
            'name.*' => ['required','string','max:255'],
            'description' => ['required','array'],
            'description.*' => ['required','string'],
            'image' => ['nullable','image'],
            'external_link' => ['nullable'],
            'status' => ['nullable','in:0,1'],
            'icon' => ['nullable','string'],
            'is_home' => ['nullable','in:0,1'],
            'website_template_id' => ['sometimes','exists:website_templates,id']
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
