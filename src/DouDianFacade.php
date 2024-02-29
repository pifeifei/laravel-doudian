<?php

namespace Abbotton\DouDian;

use Illuminate\Support\Facades\Facade;

class DouDianFacade extends Facade
{
    public static function __callStatic($method, $args)
    {
        return app('DouDian')->$method;
    }

    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'doudian';
    }
}
