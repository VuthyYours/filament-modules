<?php

namespace Vuthyyours\Modules;

abstract class ChartWidget extends \Filament\Widgets\ChartWidget
{
    use \Vuthyyours\Modules\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}
