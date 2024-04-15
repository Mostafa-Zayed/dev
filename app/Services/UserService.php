<?php 

namespace App\Services;

use App\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public $userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store($userData)
    {

    }
    public function register($userData)
    {
        return User::create([
            'surname' => 'mr',
            'first_name' => $userData['first_name'],
            'email'      => $userData['email'],
            'username'   => $userData['email'],
            'contact_no'  => $userData['contact_no'],
            'password'   => Hash::make($userData['password']),
            'language' => 'ar',
        ]);
    }

    public function getUserByEmail(string $email)
    {
        return $this->userRepository->getUserByEmail($email);
    }
}