<?php


namespace App\Modules\Broadcaster\Core\Application\EventListeners;


use App\Modules\Broadcaster\Core\Domain\Event\RouteAccessed;

class RouteAccessedSyncEventListener
{
    public function handle(RouteAccessed $event)
    {
        echo "This event handler is not queued: " . $event->getPath();
    }
}