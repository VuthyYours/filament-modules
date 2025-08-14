<?php

namespace Eessoo\Modules;

abstract class Resource extends \Filament\Resources\Resource
{
    use \Eessoo\Modules\Traits\CanAccessTrait;
}
