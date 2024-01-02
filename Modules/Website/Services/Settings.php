<?php 

namespace Modules\Website\Services;

use Modules\Website\Repository\WebsiteSetting;

class Settings 
{
    private $repository;

    public function __construct()
    {
        $this->repository = new WebsiteSetting();
    }
}