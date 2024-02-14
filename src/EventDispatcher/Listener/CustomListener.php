<?php

namespace Aatis\Tester\EventDispatcher\Listener;

use Aatis\EventDispatcher\Attribute\EventListener;
use Aatis\Tester\Common\Interface\WriterInterface;
use Aatis\Tester\EventDispatcher\Event\CustomStoppableEvent;

#[EventListener(priority: 2)]
class CustomListener
{
    public function __construct(private readonly WriterInterface $writer)
    {
    }

    public function __invoke(CustomStoppableEvent $event): void
    {
        $this->writer->write($event->getMessage());
        $event->stopPropagation();
    }
}
