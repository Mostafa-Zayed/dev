<?php

namespace App\Repositories\Unit;

use App\Repositories\UnitRepository;
use Illuminate\Support\Facades\DB;
use App\Unit;

class MysqlRepository extends UnitRepository
{
    public function getAll(int $businessId)
    {
        return Unit::ForBusiness($businessId)
            ->with(['base_unit'])
            ->select([
                'actual_name', 'short_name', 'allow_decimal', 'id',
                'base_unit_id', 'base_unit_multiplier',
            ])->get();
    }

    public function forDropDown(int $businessId, $showNone = false, $onlyBase = true)
    {
        $query = Unit::ForBusiness($businessId);
        $query = $onlyBase ? $query->whereNull('base_unit_id') : $query;
        return $query->select(DB::raw('CONCAT(actual_name, " (", short_name, ")") as name'), 'id')->get();
    }

    public function store(array $unitData)
    {
        return Unit::create($unitData);
    }
}
