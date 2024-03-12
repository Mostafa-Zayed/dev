<?php 

namespace App\Repositories;

abstract class BusinessLocationRepository
{
    public abstract function getAll();
    public abstract function store(array $businessData);
}