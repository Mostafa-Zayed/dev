<?php 

namespace App\Repositories;

abstract class BusinessRepository
{
    public abstract function getAll();
    public abstract function store(array $businessData);
}