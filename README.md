# atoum PHPUnit extension [![Build Status](https://travis-ci.org/atoum/phpunit-extension.svg?branch=master)](https://travis-ci.org/atoum/phpunit-extension)

![atoum](http://downloads.atoum.org/images/logo.png)

## Install it

Install extension using [composer](https://getcomposer.org):

```json
{
    "require-dev": {
        "atoum/phpunit-extension": "~1.0"
    }
}

```

Enable the extension using atoum configuration file:

```php
<?php

// .atoum.php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use mageekguy\atoum\phpunit;

$extension = new phpunit\extension($script);

$extension->addToRunner($runner);
```

## Support

### Helpers

| Method                                                                                   | Supported |
|------------------------------------------------------------------------------------------|:---------:|
| `fail`                                                                                   | ✘         |
| `markTestIncomplete`                                                                     | ✘         |
| `markTestSkipped`                                                                        | ✔         |

### Assertions

| Method                                                                                                  | Supported |
|---------------------------------------------------------------------------------------------------------|:---------:|
| `assertArrayHasKey(mixed $key, array $array[, string $message = ''])`                                   | ✔         |
| `assertClassHasAttribute`                                                                               | ✘         |
| `assertArraySubset(array $subset, array $array[, bool $strict = '', string $message = ''])`             | ✔         |
| `assertClassHasStaticAttribute`                                                                         | ✘         |
| `assertContains(mixed $needle, Iterator|array $haystack[, string $message = ''])`                       | ✘         |
| `assertContains(string $needle, string $haystack[, string $message = '', boolean $ignoreCase = FALSE])` | ✘         |
| `assertContainsOnly`                                                                                    | ✘         |
| `assertContainsOnlyInstancesOf`                                                                         | ✘         |
| `assertCount`                                                                                           | ✘         |
| `assertEmpty`                                                                                           | ✘         |
| `assertEqualXMLStructure`                                                                               | ✘         |
| `assertEquals(mixed $expected, mixed $actual[, string $message = ''])`                                  | ✔         |
| `assertEquals(float $expected, float $actual[, string $message = '', float $delta = 0])`                | ✔         |
| `assertEquals(DOMDocument $expected, DOMDocument $actual[, string $message = ''])`                      | ✘         |
| `assertEquals(object $expected, object $actual[, string $message = ''])`                                | ✔         |
| `assertEquals(array $expected, array $actual[, string $message = ''])`                                  | ✔         |
| `assertFalse`                                                                                           | ✘         |
| `assertFileEquals`                                                                                      | ✘         |
| `assertFileExists`                                                                                      | ✘         |
| `assertGreaterThan`                                                                                     | ✘         |
| `assertGreaterThanOrEqual`                                                                              | ✘         |
| `assertInfinite`                                                                                        | ✘         |
| `assertInstanceOf($expected, $actual[, $message = ''])`                                                 | ✔         |
| `assertInternalType`                                                                                    | ✘         |
| `assertJsonFileEqualsJsonFile`                                                                          | ✘         |
| `assertJsonStringEqualsJsonFile`                                                                        | ✘         |
| `assertJsonStringEqualsJsonString`                                                                      | ✘         |
| `assertLessThan`                                                                                        | ✘         |
| `assertLessThanOrEqual`                                                                                 | ✘         |
| `assertNan`                                                                                             | ✘         |
| `assertNull`                                                                                            | ✘         |
| `assertObjectHasAttribute`                                                                              | ✘         |
| `assertRegExp`                                                                                          | ✘         |
| `assertStringMatchesFormat`                                                                             | ✘         |
| `assertStringMatchesFormatFile`                                                                         | ✘         |
| `assertSame(mixed $expected, mixed $actual[, string $message = ''])`                                    | ✔         |
| `assertStringEndsWith`                                                                                  | ✘         |
| `assertStringEqualsFile`                                                                                | ✘         |
| `assertStringStartsWith`                                                                                | ✘         |
| `assertThat`                                                                                            | ✘         |
| `assertTrue`                                                                                            | ✘         |
| `assertXmlFileEqualsXmlFile`                                                                            | ✘         |
| `assertXmlStringEqualsXmlFile`                                                                          | ✘         |
| `assertXmlStringEqualsXmlString`                                                                        | ✘         |
