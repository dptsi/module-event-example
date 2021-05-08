<?php

namespace App\Modules\Broadcaster\Providers;

use Dptsi\Modular\Facade\ModuleManager;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [

    ];

    public function shouldDiscoverEvents()
    {
        return true;
    }

    protected function discoverEventsWithin()
    {
        return [
            ModuleManager::path('Broadcaster', 'Core/Application/EventListeners'),
        ];
    }
}