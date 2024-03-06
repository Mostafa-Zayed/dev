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
            'name' => ['sometimes','array'],
            'name.*' => ['sometimes','string','max:255'],
            'description' => ['sometimes','array'],
            'description.*' => ['sometimes','string'],
            'status' => ['sometimes','in:0,1'],
            'is_home' => ['sometimes','in:0,1'],
            'image'   => ['sometimes','image'],
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
