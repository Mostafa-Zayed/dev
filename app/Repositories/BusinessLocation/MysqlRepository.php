<?php 

namespace App\Repositories\BusinessLocation;

use App\Repositories\BusinessLocationRepository;
use Illuminate\Support\Facades\DB;


class MysqlRepository extends BusinessLocationRepository
{
    public function getAll()
    {
        DB::table('users')->get();
    }

    public function store($userData)
    {
        DB::table('users')->insert($userData);
    }
}