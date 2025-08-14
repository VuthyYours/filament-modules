<?php

namespace Eessoo\Modules;

abstract class ChartWidget extends \Filament\Widgets\ChartWidget
{
    use \Eessoo\Modules\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}
