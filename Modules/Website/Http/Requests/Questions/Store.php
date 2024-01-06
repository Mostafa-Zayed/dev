<?php

namespace Modules\Website\Http\Requests\Questions;

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
            'title' => ['required','array'],
            'title.*' => ['required','string','max:255'],
            'answer' => ['required','array'],
            'answer.*' => ['required','string']
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
