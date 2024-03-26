<?php

namespace App\Traits;

use App\Traits\ResponseTrait;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

trait ValidationError
{
    protected  function failedValidation(Validator $validator)
    {
        if (request()->is('api/*')) {
            throw new HttpResponseException(self::mapValidationResponse($validator));
        }else{
            throw (new ValidationException($validator))
                ->errorBag($this->errorBag)
                ->redirectTo($this->getRedirectUrl());
        }
    }

    protected static function mapValidationResponse(Validator &$validator): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'key' => 'fail',
            'msg' => $validator->errors()->first()
        ]);
    }
}