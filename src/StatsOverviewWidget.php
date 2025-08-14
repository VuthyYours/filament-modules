<?php

namespace Vuthyyours\Modules;

abstract class StatsOverviewWidget extends \Filament\Widgets\StatsOverviewWidget
{
    use \Vuthyyours\Modules\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}
