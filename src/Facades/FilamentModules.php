<?php

namespace Eessoo\Modules\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eessoo\Modules\Modules
 */
class FilamentModules extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Eessoo\Modules\Modules::class;
    }
}
