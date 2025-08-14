<?php

namespace Vuthyyours\Modules;

abstract class TableWidget extends \Filament\Widgets\TableWidget
{
    use \Vuthyyours\Modules\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}
