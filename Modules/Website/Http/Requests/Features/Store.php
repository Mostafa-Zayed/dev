<?php

namespace Modules\Website\Http\Requests\Features;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    public function prepareForValidation()
    {
        $this->merge(['number' => rand(1,22)]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'number' => ['sometimes','numeric'],
            'name' => ['required','array'],
            'name.*' => ['required','string','max:255'],
            'description' => ['required','array'],
            'description.*' => ['required','string'],
            'image' => ['required','image'],
            'external_link' => ['sometimes','url'],
            'status' => ['sometimes','in:0,1'],
            'is_home' => ['sometimes','in:0,1']
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
