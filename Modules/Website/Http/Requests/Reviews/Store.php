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
            'job'  => ['required','array'],
            'job.*' => ['required','string'],
            'rate'  => ['required','in:1,2,3,4,5'],
            'description' => ['required','array'],
            'description.*' => ['required','string'],
            'status' => ['nullable','in:0,1'],
            'is_home' => ['nullable','in:0,1'],
            'user_id' => ['nullable','exists:users,id'],
            'image'  => ['required','image']
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
