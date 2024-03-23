<?php 

namespace App\Repositories\Warranty;

use App\Repositories\WarrantyRepository;
use App\Warranty;
use Illuminate\Support\Facades\DB;


class MysqlRepository extends WarrantyRepository
{
    public function getAll($businessId = null)
    {
        return Warranty::where('business_id', $businessId)
        ->select(['id', 'name', 'description', 'duration', 'duration_type'])
        ->get();
    }

    public function store($warrantyData)
    {
        return Warranty::create($warrantyData);
    }

    public function getOne(int $id, int $businessId)
    {
        return Warranty::where('business_id','=',$businessId)->find($id);
    }
}