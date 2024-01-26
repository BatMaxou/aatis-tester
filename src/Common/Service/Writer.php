<?php

namespace Aatis\Tester\Common\Service;

use Aatis\Tester\Common\Interface\WriterInterface;

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
