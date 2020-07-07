<?php

namespace App\Service;

use App\Exception\AnimalException;
use App\Exception\BaseException;
use Respect\Validation\Validator as validator;

/**
 * Base Service.
 */
abstract class BaseService
{

    /**
     * @param $integerNumber
     * @return mixed
     * @throws \Exception
     */
    protected static function validateInteger($integerNumber)
    {
        if (!validator::numeric()->validate($integerNumber)) {
            throw new BaseException('Invalid number.', 403);
        }
        return $integerNumber;
    }

}
