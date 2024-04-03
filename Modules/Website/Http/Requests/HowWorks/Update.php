<?php

namespace Modules\Website\Http\Requests\HowWorks;

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
            'name' => ['required','array'],
            'name.*' => ['required','string','max:255'],
            'description' => ['required','array'],
            'description.*' => ['required','string'],
            'image' => ['nullable','image'],
            'status' => ['nullable','in:0,1'],
            'is_home' => ['nullable','in:0,1'],
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
