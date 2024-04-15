<?php

namespace App\Http\Requests\Api\V1\Auth;

use App\Traits\ValidationError;
use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
{
    use ValidationError;
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
            'email' => ['required','email','max:255'],
            'password' => ['required','min:6','max:255','string'],
            'device_id'    => 'required|max:250',
            'device_type'  => 'required|in:ios,android,web',
        ];
    }
}
