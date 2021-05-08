<?php


namespace App\Modules\Broadcaster\Infrastructure\Service;


use App\Modules\Broadcaster\Core\Domain\Service\EventWriterInterface;
use DateTime;
use Illuminate\Support\Facades\Storage;

class EventWriter implements EventWriterInterface
{
    public function write(string $path)
    {
        Storage::append(
            'Broadcaster/event_log.txt',
            'Route ' . $path . ' accessed at ' . (new DateTime())->format('Y-m-d H:i:s')
        );
    }
}