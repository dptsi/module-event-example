<?php

namespace App\Modules\Receiver\Providers;

use App\Modules\Receiver\Core\Application\Service\WriteEvent\WriteEventService;
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
        Messaging::listenTo(
            'broadcaster',
            function (string $label, array $data) {
                switch ($label) {
                    case 'RouteAccessed':
                        /** @var WriteEventService $service */
                        $service = $this->app->make(WriteEventService::class);
                        $service->execute($data['path']);
                        break;
                }
            }
        );
    }
}