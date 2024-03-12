<?php 

namespace App\Services;

use App\Repositories\ReferenceCountRepository;

class ReferenceCountService
{
    public $referenceCountRepository;

    public function __construct(ReferenceCountRepository $referenceCountRepository)
    {
        $this->referenceCountRepository = $referenceCountRepository;
    }

    
}