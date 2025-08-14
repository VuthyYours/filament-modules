<?php

namespace Vuthyyours\Modules\Commands;

use Illuminate\Console\GeneratorCommand;
use Vuthyyours\Modules\Concerns\GeneratesModularFiles;

class ModuleMakeFilamentPluginCommand extends GeneratorCommand
{
    use GeneratesModularFiles;

    protected $name = 'module:make:filament-plugin';

    protected $description = 'Create a new Filament Plugin class in the module';

    protected $type = 'Filament Plugin';

    protected function getRelativeNamespace(): string
    {
        return 'Filament';
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath('/stubs/filament-plugin.stub');
    }

    protected function stubReplacements(): array
    {
        return [
            'moduleStudlyName' => $this->getModule()->getStudlyName(),
            'pluginId' => str($this->argument('name'))->replace('Plugin', '')->studly()->lower()->toString(),
        ];
    }
}
