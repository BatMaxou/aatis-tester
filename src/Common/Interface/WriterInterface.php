<?php

namespace Aatis\Tester\Common\Interface;

interface WriterInterface
{
    public function write(?string $msg = null): void;
}
