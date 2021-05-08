<?php

namespace App\Modules\Receiver;

use App\Modules\Receiver\Providers\BladeComponentServiceProvider;
use App\Modules\Receiver\Providers\DatabaseServiceProvider;
use App\Modules\Receiver\Providers\DependencyServiceProvider;
use App\Modules\Receiver\Providers\EventServiceProvider;
use App\Modules\Receiver\Providers\LangServiceProvider;
use App\Modules\Receiver\Providers\MessagingServiceProvider;
use App\Modules\Receiver\Providers\RouteServiceProvider;
use App\Modules\Receiver\Providers\ViewServiceProvider;
use Dptsi\Modular\Base\BaseModule;

class Module extends BaseModule
{
    public function getProviders(): array
    {
        return [
            RouteServiceProvider::class,
            DatabaseServiceProvider::class,
            ViewServiceProvider::class,
            LangServiceProvider::class,
            BladeComponentServiceProvider::class,
            DependencyServiceProvider::class,
            EventServiceProvider::class,
            MessagingServiceProvider::class,
        ];
    }

    public function defaultModuleAction(): void
    {
        // Route::get('/', [BaseController::class, 'index']);
    }
}