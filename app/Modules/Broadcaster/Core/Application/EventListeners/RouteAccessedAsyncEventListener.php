<?php


namespace App\Modules\Broadcaster\Core\Application\EventListeners;


use App\Modules\Broadcaster\Core\Domain\Event\RouteAccessed;
use App\Modules\Broadcaster\Core\Domain\Service\EventWriterInterface;
use Illuminate\Contracts\Queue\ShouldQueue;

class RouteAccessedAsyncEventListener implements ShouldQueue
{
    private EventWriterInterface $event_writer;

    /**
     * @param EventWriterInterface $event_writer
     */
    public function __construct(EventWriterInterface $event_writer)
    {
        $this->event_writer = $event_writer;
    }

    public function handle(RouteAccessed $event)
    {
        $this->event_writer->write($event->getPath());
    }
}