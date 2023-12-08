<?php

namespace Aatis\Tester\Interface;

interface WriterInterface
{
    public function write(?string $msg = null): void;
}
