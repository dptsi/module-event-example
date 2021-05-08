<?php


namespace App\Modules\Broadcaster\Core\Application\Service\AccessRoute;


use App\Modules\Broadcaster\Core\Domain\Event\RouteAccessed;
use Dptsi\Modular\Facade\Event;

class AccessRouteService
{
    public function execute(string $path)
    {
        Event::publish(new RouteAccessed($path));
    }
}