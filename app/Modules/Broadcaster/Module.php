<?php

namespace App\Modules\Broadcaster;

use App\Modules\Broadcaster\Presentation\Controllers\BaseController;
use App\Modules\Broadcaster\Providers\BladeComponentServiceProvider;
use App\Modules\Broadcaster\Providers\DatabaseServiceProvider;
use App\Modules\Broadcaster\Providers\DependencyServiceProvider;
use App\Modules\Broadcaster\Providers\EventServiceProvider;
use App\Modules\Broadcaster\Providers\LangServiceProvider;
use App\Modules\Broadcaster\Providers\MessagingServiceProvider;
use App\Modules\Broadcaster\Providers\RouteServiceProvider;
use App\Modules\Broadcaster\Providers\ViewServiceProvider;
use Dptsi\Modular\Base\BaseModule;
use Illuminate\Support\Facades\Route;

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
         Route::get('/', [BaseController::class, 'index']);
    }
}