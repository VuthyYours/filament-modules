<?php

namespace Vuthyyours\Modules\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vuthyyours\Modules\Modules
 */
class FilamentModules extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Vuthyyours\Modules\Modules::class;
    }
}
