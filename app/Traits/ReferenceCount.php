<?php

namespace App\Traits;

use App\ReferenceCount as ReferenceCountModel;
use App\Business;
use Carbon\Carbon;

trait ReferenceCount
{
    public static function setReferenceCount(string $type, $businessId = null)
    {
        $businessId = $businessId ?? request()->session()->get('user.business_id');
        return (ReferenceCountModel::create([
            'ref_type' => $type,
            'business_id' => $businessId,
            'ref_count' => 1,
        ]))->ref_count;
    }

    public function getReferenceCount(string $type, $businessId = null)
    {
        $businessId = $businessId ?? request()->session()->get('user.business_id');
        $referenceCount = ReferenceCountModel::where('ref_type', $type)
            ->where('business_id', $businessId)
            ->first();
        return $referenceCount->ref_count;    
    }

    public static function setAndGetReferenceCount(string $type, $businessId = null)
    {
        $businessId = $businessId ?? request()->session()->get('user.business_id');
        $referenceCount = ReferenceCountModel::where('ref_type', $type)
            ->where('business_id', $businessId)
            ->first();
        if(! empty($referenceCount)){
            return self::referenceCountIncrementByOne($referenceCount);
        }
        return self::setReferenceCount($type,$businessId);
    }

    public static function referenceCountIncrementByOne(ReferenceCount & $referenceCount)
    {
        $referenceCount->ref_count += 1;
        $referenceCount->save();
        return $referenceCount->ref_count;
    }

    public static function generateReferenceNumber(string $type, $referenceCountVaue , $businessId, $defaultPrefix = null)
    {
        $prefix = session()->has('business') && ! empty(request()->session()->get('business.ref_no_prefixes')[$type]) ? request()->session()->get('business.ref_no_prefixes')[$type] : '';
        if (!empty($businessId)) {
            $business = Business::find($businessId);
            $prefixes = $business->ref_no_prefixes;
            $prefix = !empty($prefixes[$type]) ? $prefixes[$type] : '';
        }

        $prefix = ! empty($defaultPrefix) ? $defaultPrefix : '';
        $ref_digits = str_pad($referenceCountVaue, 4, 0, STR_PAD_LEFT);
        if (!in_array($type, ['contacts', 'business_location', 'username'])) {
            $ref_year = Carbon::now()->year;
            $ref_number = $prefix . $ref_year . '/' . $ref_digits;
        } else {
            $ref_number = $prefix . $ref_digits;
        }

        return $ref_number;
    }
}
