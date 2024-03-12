<?php 

namespace App\Repositories;

abstract class UserRepository
{
    public abstract function getAll();
    public abstract function store(array $userData);
}