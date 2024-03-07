<?php

namespace Modules\Website\Http\Requests\Reviews;

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
            'name.*' => ['nullable','max:255'],
            'description' => ['required','array'],
            'description.*' => ['required','string'],
            'status' => ['sometimes','in:0,1'],
            'is_home' => ['sometimes','in:0,1'],
            'user_id' => ['required','exists:users,id']
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
