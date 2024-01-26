# Aatis Tester

Package including a set of tools for testing.

## Installation

```bash
composer require aatis/tester
```

## Content

### Enums

`Template Renderer`

- ExtraTemplateFileExtensionEnum
    - **EXTRA** = '.extra.php'
    - **ZEBI** = '.zebi'

`Error Handler`

- ExtraExceptionCodeEnum
    - **_30** = 'Extra Error'
    - **_50** = 'Zebi Error'

### Interfaces

`Common`

- WriterInterface
    - **write**(string message)

### Services

`Common`

- Writer
    - **construct**(string defaultMessage)
    - **write**(?string message = null):
        - if message is null, write defaultMessage
        - else write message

`Template Renderer`

- ExtraRenderer extends PhpRenderer
    - **EXTENSION** = ExtraTemplateFileExtensionEnum::EXTRA

- ZebiRenderer extends PhpRenderer
    - **EXTENSION** = ExtraTemplateFileExtensionEnum::ZEBI
