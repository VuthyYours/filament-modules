<?php

namespace Eessoo\Modules;

abstract class TableWidget extends \Filament\Widgets\TableWidget
{
    use \Eessoo\Modules\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}
