<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait General
{
    public static function getAllTimZones()
    {
        $datetime = new \DateTimeZone('EDT');

        $timezones = $datetime->listIdentifiers();
        $timezone_list = [];
        foreach ($timezones as $timezone) {
            $timezone_list[$timezone] = $timezone;
        }

        return $timezone_list;
    }

    public static function getAllCurrencies()
    {
        $currencies = DB::table('currencies')->select('id', DB::raw("concat(country, ' - ',currency, '(', code, ') ') as info"))
            ->orderBy('country')
            ->pluck('info', 'id');

        return $currencies;
    }

    public static function getAllMonths()
    {
        for ($i = 1; $i <= 12; $i++) {
            $months[$i] = __('business.months.' . $i);
        }

        return $months;
    }

    /**
     * Gives a list of all accouting methods
     *
     * @return array
     */
    public static function getAllAccountingMethods()
    {
        return [
            'fifo' => __('business.fifo'),
            'lifo' => __('business.lifo'),
        ];
    }

    function isAllowRegiser()
    {
        return config('constants.allow_registration');
    }

    /**
     * This function unformats a number and returns them in plain eng format
     *
     * @param  int  $input_number
     * @return float
     */
    public static function num_uf($input_number, $currency_details = null)
    {
        $thousand_separator = '';
        $decimal_separator = '';

        if (!empty($currency_details)) {
            $thousand_separator = $currency_details->thousand_separator;
            $decimal_separator = $currency_details->decimal_separator;
        } else {
            $thousand_separator = session()->has('currency') ? session('currency')['thousand_separator'] : '';
            $decimal_separator = session()->has('currency') ? session('currency')['decimal_separator'] : '';
        }

        $num = str_replace($thousand_separator, '', $input_number);
        $num = str_replace($decimal_separator, '.', $num);

        return (float) $num;
    }
}
