<?php


namespace App\Modules\Receiver\Core\Application\Service\WriteEvent;


use App\Modules\Receiver\Core\Domain\Service\EventWriterInterface;

class WriteEventService
{
    private EventWriterInterface $event_writer;

    public function __construct(EventWriterInterface $event_writer)
    {
        $this->event_writer = $event_writer;
    }

    public function execute(string $path)
    {
        $this->event_writer->write($path);
    }
}