<?php

namespace App\Modules\Broadcaster\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    protected string $module_name = 'Broadcaster';
    protected string $view_path = '../Presentation/resources/views';

    public function boot()
    {
        View::addNamespace($this->module_name, __DIR__ . '/' . $this->view_path);
    }
}