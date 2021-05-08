<?php

namespace App\Modules\Receiver\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeComponentServiceProvider extends ServiceProvider
{
    protected string $module_name = 'Receiver';

    public function register()
    {
        Blade::componentNamespace($this->getNamespace(), $this->module_name);
    }

    public function getNamespace(): string
    {
        return "App\\Modules\\Receiver\\Presentation\\Components";
    }
}