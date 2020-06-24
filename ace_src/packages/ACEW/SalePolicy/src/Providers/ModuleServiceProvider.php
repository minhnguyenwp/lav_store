<?php

namespace ACEW\SalePolicy\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \ACEW\SalePolicy\Models\AceSettings::class,
    ];
}