# Aatis Tester

Package including a set of tools for testing.

## Installation

```bash
composer require aatis/tester
```

## Content

### Interfaces

- WriterInterface
    - **write**(string message)

### Services

- Writer
    - **construct**(string defaultMessage)
    - **write**(?string message = null):
        - if message is null, write defaultMessage
        - else write message
