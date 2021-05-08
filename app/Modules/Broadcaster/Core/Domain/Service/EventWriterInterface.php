<?php


namespace App\Modules\Broadcaster\Core\Domain\Service;


interface EventWriterInterface
{
    public function write(string $path);
}