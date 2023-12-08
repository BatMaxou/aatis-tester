<?php

namespace Aatis\Tester\Service\TemplateRenderer;

use Aatis\TemplateRenderer\Service\PhpRenderer;
use Aatis\Tester\Enum\ExtraTemplateFileExtensionEnum;

class ZebiRenderer extends PhpRenderer
{
    public const EXTENSION = ExtraTemplateFileExtensionEnum::ZEBI;
}
