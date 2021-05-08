<?php

namespace App\Modules\Broadcaster\Providers;

use Dptsi\Modular\Facade\Messaging;
use Illuminate\Support\ServiceProvider;

class MessagingServiceProvider extends ServiceProvider
{
    protected string $module_name = 'broadcaster';

    public function register()
    {
    }

    public function boot()
    {
        Messaging::setChannel('broadcaster');
//        Messaging::listenTo();
    }
}