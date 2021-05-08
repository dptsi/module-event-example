<?php

namespace App\Modules\Broadcaster\Providers;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\ServiceProvider;

class LangServiceProvider extends ServiceProvider
{
    protected string $module_name = 'Broadcaster';
    protected string $lang_path = '../Presentation/resources/lang';

    public function boot()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        Lang::addNamespace($this->module_name, __DIR__ . '/' . $this->lang_path);
    }
}