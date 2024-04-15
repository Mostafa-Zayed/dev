<?php 

namespace App\Repositories\User;

use App\User;
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

    public function getUserByid($id)
    {

    }

    public function getUserByEmail(string $email, $columns = '*')
    {
        if($columns && $columns != '*')
            return User::select($columns)->where('email','=',$email)->first();
        else 
            return User::where('email','=',$email)->first();
    }
}