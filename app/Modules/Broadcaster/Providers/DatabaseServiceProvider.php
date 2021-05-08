<?php

namespace App\Modules\Broadcaster\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    protected string $module_name = 'broadcaster';

    public function register()
    {
    }

    public function boot()
    {
        Config::set(
            'database.connections.' . $this->module_name,
            config($this->module_name . '.database')
        );
    }
}