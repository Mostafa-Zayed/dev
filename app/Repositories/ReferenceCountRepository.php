<?php 

namespace App\Repositories;


abstract class ReferenceCountRepository
{
    public abstract function getAll();
    public abstract function store(array $businessData);
}