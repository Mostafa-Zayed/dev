<?php

namespace Modules\Website\Http\Requests\Partners;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
            'image' => ['nullable','image'],
            'link'  => ['sometimes','string','max:255'],
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
