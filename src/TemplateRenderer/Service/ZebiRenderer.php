<?php

namespace Aatis\Tester\TemplateRenderer\Service;

use Aatis\TemplateRenderer\Service\PhpRenderer;
use Aatis\Tester\TemplateRenderer\Enum\ExtraTemplateFileExtensionEnum;

class ZebiRenderer extends PhpRenderer
{
    public const EXTENSION = ExtraTemplateFileExtensionEnum::ZEBI;
}
