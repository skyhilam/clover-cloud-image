<?php

namespace Clover\CloudImage\Facades;

use Illuminate\Support\Facades\Facade;

class CloudImage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cloud-image';
    }
}
