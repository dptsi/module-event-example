<?php


namespace App\Modules\Receiver\Core\Domain\Service;


interface EventWriterInterface
{
    public function write(string $path);
}