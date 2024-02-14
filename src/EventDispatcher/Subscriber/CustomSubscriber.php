<?php

namespace Aatis\Tester\EventDispatcher\Subscriber;

use Aatis\Tester\Common\Interface\WriterInterface;
use Aatis\Tester\EventDispatcher\Event\CustomEvent;
use Aatis\Tester\EventDispatcher\Event\CustomStoppableEvent;
use Aatis\EventDispatcher\Interface\EventSubscriberInterface;

class CustomSubscriber implements EventSubscriberInterface
{
    public function __construct(private readonly WriterInterface $writer)
    {
    }

    public function custom(CustomEvent $event): void
    {
        $this->writer->write($event->getMessage());
    }

    public function customFirst(CustomStoppableEvent $event): void
    {
        $this->writer->write('-- First '.$event->getMessage().' -- ');
    }

    public function customNever(CustomStoppableEvent $event): void
    {
        $this->writer->write('-- Never '.$event->getMessage().' -- ');
    }

    public function getSubscribedEvents(): iterable
    {
        return [
            CustomEvent::class => ['custom', 2],
            CustomStoppableEvent::class => [
                ['customFirst', 4],
                'customNever',
            ],
        ];
    }
}
