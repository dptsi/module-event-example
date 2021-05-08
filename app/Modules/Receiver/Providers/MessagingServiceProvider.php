<?php

namespace App\Modules\Receiver\Providers;

use Dptsi\Modular\Facade\Messaging;
use Illuminate\Support\ServiceProvider;

class MessagingServiceProvider extends ServiceProvider
{
    protected string $module_name = 'receiver';

    public function register()
    {
    }

    public function boot()
    {
        Messaging::setChannel('receiver');
//        Messaging::listenTo();
    }
}