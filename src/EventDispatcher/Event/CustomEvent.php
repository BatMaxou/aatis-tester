<?php

namespace App\Event;

use Aatis\EventDispatcher\Event\Event;

class CustomEvent extends Event
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
