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
            'invoice_count' => ['required','numeric'],
            'trial_days'  => ['sometimes','numeric'],
            'price' => ['required','numeric'],
            'sort_order' => ['required','numeric'],
            'is_private' => ['sometimes','in:0,1'],
            'is_one_time' => ['sometimes','in:0,1'],
            'enable_custom_link' => ['sometimes','in:0,1'],
            'custom_link' => ['sometimes','max:255'],
            'custom_link_text' => ['sometimes','max:255'],
            'is_active' => ['sometimes','in:0,1'],
            'custom_permissions' => ['required','array'],
            'online_users' => ['sometimes','numeric'],
            'image' => ['required','image'],
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
