<?php

namespace Eessoo\Modules;

abstract class StatsOverviewWidget extends \Filament\Widgets\StatsOverviewWidget
{
    use \Eessoo\Modules\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}
