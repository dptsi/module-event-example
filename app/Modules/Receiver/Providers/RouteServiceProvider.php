<?php

namespace App\Modules\Receiver\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected string $module_name = 'receiver';
    protected string $route_path = '../Presentation/routes';

    public function boot()
    {
        Route::prefix('api/' . $this->module_name)
            ->middleware('api')
            ->group(__DIR__ . '/' . $this->route_path . '/api.php');

        Route::middleware('web')
            ->prefix("{$this->module_name}")
            ->group(__DIR__ . '/' . $this->route_path . '/web.php');
    }
}