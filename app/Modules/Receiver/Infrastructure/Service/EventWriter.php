<?php


namespace App\Modules\Receiver\Infrastructure\Service;


use App\Modules\Receiver\Core\Domain\Service\EventWriterInterface;
use DateTime;
use Illuminate\Support\Facades\Storage;

class EventWriter implements EventWriterInterface
{
    public function write(string $path)
    {
        Storage::append(
            'Receiver/event_log.txt',
            'Route ' . $path . ' accessed at ' . (new DateTime())->format('Y-m-d H:i:s')
        );
    }
}