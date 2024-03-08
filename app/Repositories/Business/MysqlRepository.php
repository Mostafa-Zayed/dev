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
}