<?php

namespace App\Modules\Broadcaster\Providers;

use App\Modules\Broadcaster\Core\Domain\Service\EventWriterInterface;
use App\Modules\Broadcaster\Infrastructure\Service\EventWriter;
use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(EventWriterInterface::class, EventWriter::class);
    }
}