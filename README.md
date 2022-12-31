# PHP Array To Object

A PHP array to object converter.

## Installation

```bash
composer require ixnode/php-array-to-object
```

```bash
vendor/bin/php-array-to-object -V
```

```bash
php-array-to-object 0.1.0 (12-31-2022 15:51:08) - Björn Hempel <bjoern@hempel.li>
```

## Usage

```php
use Ixnode\PhpArrayToObject\ArrayToObject;
```

```php
$array = [
    'backgroundColor' => '255,255,255,100',
    'printCalendarWeek' => true,
    'printWeekNumber' => true,
    'printQrCodeMonth' => true,
    'printQrCodeTitle' => true,
    'aspectRatio' => 1.414,
    'height' => 4000,
];

$backgroundColor = (new ArrayToObject($array))->getBackgroundColor();
```

## Development

```bash
git clone git@github.com:ixnode/php-array-to-object.git && cd php-array-to-object
```

```bash
composer install
```

```bash
composer test
```

## License

This tool is licensed under the MIT License - see the [LICENSE](/LICENSE) file for details