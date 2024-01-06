<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

Trait LogException
{
    public function logMethodException(\Exception & $exception)
    {
        Log::emergency("File:" . $exception->getFile(). "Line:" . $exception->getLine(). "Message:" . $exception->getMessage());
    }
}