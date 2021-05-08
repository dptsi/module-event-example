<?php


namespace App\Modules\Broadcaster\Core\Application\EventListeners;


use App\Modules\Broadcaster\Core\Domain\Event\RouteAccessed;
use Dptsi\Modular\Facade\Messaging;

/**
 * Class RouteAccessedMessageEventListener
 * @package App\Modules\Broadcaster\Core\Application\EventListeners
 */
class RouteAccessedMessageEventListener
{
    public function handle(RouteAccessed $event)
    {
        Messaging::broadcast(
            'broadcaster',
            'RouteAccessed',
            [
                'path' => $event->getPath(),
            ]
        );
    }
}