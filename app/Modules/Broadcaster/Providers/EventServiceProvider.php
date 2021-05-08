<?php

namespace App\Modules\Broadcaster\Providers;

use Dptsi\Modular\Facade\Module;
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
            Module::path('Broadcaster', 'Core/Application/EventListeners'),
        ];
    }
}