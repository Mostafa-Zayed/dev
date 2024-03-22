<?php

namespace App\Http\Requests\Unit;

use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Destroy extends FormRequest
{
    use General;
    public function prepareForValidation()
    {
        $this->merge([
            'business_id' => $this->session()->get('user.business_id'),
        ]);
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'business_id' => ['required', 'integer', 'exists:business,id'],
            'id'          => ['required','integer','exists:units,id']
        ];
    }
}
