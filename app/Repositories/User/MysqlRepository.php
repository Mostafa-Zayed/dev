<?php 

namespace App\Repositories\User;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;


class MysqlRepository extends UserRepository
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