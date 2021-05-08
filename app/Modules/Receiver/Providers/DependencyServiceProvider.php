<?php

namespace App\Modules\Receiver\Providers;

use App\Modules\Receiver\Core\Domain\Service\EventWriterInterface;
use App\Modules\Receiver\Infrastructure\Service\EventWriter;
use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(EventWriterInterface::class, EventWriter::class);
    }
}