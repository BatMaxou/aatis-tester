# Aatis Tester

Package including a set of tools for testing.

## Installation

```bash
composer require aatis/tester
```

## Content

### Common

`Interfaces`

- WriterInterface
    - **write**(string message): void

`Services`

- Writer
    - **construct**(string defaultMessage)
    - **write**(?string message = null): void
        - if message is null, write defaultMessage
        - else write message

### ErrorHandler

`Enums`

- ExtraExceptionCodeEnum
    - **_30** = 'Extra Error'
    - **_50** = 'Zebi Error'

### EventDispatcher

`Events`

- CustomEvent etxends Event
    - **construct**(string $message)
    - **getMessage**(): string

- CustomStoppableEvent extends StoppableEvent
    - **construct**(string $message)
    - **getMessage**(): string

`Listeners`

- CustomListener
    - **__invoke**(CustomStoppableEvent $event): void

`Subscribers`

- CustomSubscriber
    - **__construct**(private readonly WriterInterface $writer)
    - **custom**(CustomEvent $event): void
    - **customFirst**(CustomStoppableEvent $event): void
    - **customNever**(CustomStoppableEvent $event): void
    - **getSubscribedEvents**(): iterable

### TemplateRenderer

`Enums`

- ExtraTemplateFileExtensionEnum
    - **EXTRA** = '.extra.php'
    - **ZEBI** = '.zebi'

`Services`

- ExtraRenderer extends PhpRenderer
    - **EXTENSION** = ExtraTemplateFileExtensionEnum::EXTRA

- ZebiRenderer extends PhpRenderer
    - **EXTENSION** = ExtraTemplateFileExtensionEnum::ZEBI
