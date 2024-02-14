<?php

namespace App\Event;

use Aatis\EventDispatcher\Event\StoppableEvent;

class CustomStoppableEvent extends StoppableEvent
{
    public function __construct(
        private string $message
    ) {
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
