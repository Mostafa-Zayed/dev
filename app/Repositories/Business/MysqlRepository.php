<?php 

namespace App\Repositories\Business;

use App\Repositories\BusinessRepository;
use Illuminate\Support\Facades\DB;

class MysqlRepository extends BusinessRepository
{
    public function getAll()
    {
        DB::table('business')->get();
    }

    public function store($businessData)
    {
        DB::table('business')->insert($businessData);
    }

    public function getLocationsCount(int $businessId)
    {
        return DB::table('business_locations')->where('business_id',$businessId)->count();
    }

    public function getUsersCount($businessId)
    {
        return DB::table('users')->where([
            ['business_id','=',$businessId],
            ['allow_login','=',1]
        ])->count();
    }

    public function getProductsCount($businessId, $startDate, $endDate)
    {
        $query = DB::table('products')
            ->where('business_id','=',$businessId);
        if(! empty($startDate) && ! empty($endDate)){
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }
        return $query->count();
    }

    public function getCountInvoice($businessId, $startDate, $endDate)
    {
        $query = DB::table('transactions')
                ->where([
                    ['business_id','=',$businessId],
                    ['type', '=','sell'],
                    ['status', '=','final']
                ]);
        if(! empty($startDate) && ! empty($endDate)){
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }
        return $query->count();
    }
}