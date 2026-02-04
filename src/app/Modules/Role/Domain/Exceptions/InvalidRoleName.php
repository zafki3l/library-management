<?php

namespace App\Modules\Role\Domain\Exceptions;

class InvalidRoleName
{
    public function __construct()
    {
        throw new \Exception('Invalid role name!');
    }
}