<?php

namespace App\Traits;

use App\Currency;
use Illuminate\Support\Facades\DB;

trait BusinessTrait
{
    /**
     * Gives a list of all currencies
     *
     * @return array
     */
    public static function getAllCurrencies()
    {
        return Currency::select('id', DB::raw("concat(country, ' - ',currency, '(', code, ') ') as info"))
                ->orderBy('country')
                ->pluck('info', 'id');
    }
}