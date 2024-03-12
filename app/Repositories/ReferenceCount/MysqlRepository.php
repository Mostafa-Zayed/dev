<?php 

namespace App\Repositories\ReferenceCount;

use App\Repositories\ReferenceCountRepository;
use Illuminate\Support\Facades\DB;

class MysqlRepository extends ReferenceCountRepository
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