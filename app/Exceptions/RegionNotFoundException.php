<?php

namespace App\Exceptions;

use Exception;

class RegionNotFoundException extends Exception
{
    public function report()
    {
        return [
            'status' => 'error',
            'data' => [
                'message' => 'Region ID not supported'
            ]
        ];
    }
}
