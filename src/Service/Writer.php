<?php

namespace Aatis\Tester\Service;

use Aatis\Tester\Interface\WriterInterface;

class Writer implements WriterInterface
{
    public function __construct(private readonly string $defaultMessage)
    {
    }

    public function write(?string $msg = null): void
    {
        echo $msg ?? $this->defaultMessage;
    }
}
