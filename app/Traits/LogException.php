<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

Trait LogException
{
    use ResponseTrait;
    public function logMethodException(\Exception & $exception): \Illuminate\Http\JsonResponse
    {
        Log::emergency("File:" . $exception->getFile(). "Line:" . $exception->getLine(). "Message:" . $exception->getMessage());
    }
}