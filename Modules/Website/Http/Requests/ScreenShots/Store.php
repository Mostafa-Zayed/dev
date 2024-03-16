<?php

namespace Modules\Website\Http\Requests\ScreenShots;

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
            'name' => ['nullable','array'],
            'name.*' => ['nullable','string','max:255'],
            'description' => ['nullable','array'],
            'description.*' => ['nullable','string'],
            'status' => ['nullable','in:0,1'],
            'is_home' => ['nullable','in:0,1'],
            'image'   => ['nullable','image'],
            'website_template_id' => ['nullable','exists:website_templates,id']
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
