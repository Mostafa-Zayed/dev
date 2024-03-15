<?php

namespace Modules\Superadmin\Http\Requests\Packages;

use Illuminate\Foundation\Http\FormRequest;
use App\Utils\Util;

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
            'name' => ['required','array'],
            'description' => ['required','array'],
            'location_count' => ['required','numeric'],
            'user_count' => ['required','numeric'],
            'product_count' => ['required','numeric'],
            'invoice_count' => ['required','numeric'],
            'interval' => ['required','in:days,months,years'],
            'interval_count' => ['required','numeric','gt:0'],
            'trial_days'  => ['nullable','numeric'],
            'price' => ['required','numeric'],
            'sort_order' => ['required','numeric'],
            'is_private' => ['nullable','in:0,1'],
            'is_one_time' => ['nullable','in:0,1'],
            'enable_custom_link' => ['nullable','in:0,1'],
            'custom_link' => ['nullable','max:255'],
            'custom_link_text' => ['nullable','max:255'],
            'is_active' => ['nullable','in:0,1'],
            'custom_permissions' => ['required','array'],
            'online_users' => ['nullable','numeric'],
            'image' => ['required','image'],
            'show_home' => ['nullable','in:0,1']
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
