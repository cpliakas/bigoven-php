# BigOven API Client for PHP

[![Build Status](https://travis-ci.org/cpliakas/bigoven-php.png)](https://travis-ci.org/cpliakas/bigoven-php)
[![Coverage Status](https://coveralls.io/repos/cpliakas/bigoven-php/badge.png?branch=master)](https://coveralls.io/r/cpliakas/bigoven-php?branch=master)
[![Total Downloads](https://poser.pugx.org/cpliakas/bigoven-php/downloads.png)](https://packagist.org/packages/cpliakas/bigoven-php)
[![Latest Stable Version](https://poser.pugx.org/cpliakas/bigoven-php/v/stable.png)](https://packagist.org/packages/cpliakas/bigoven-php)

A PHP client library for the [BigOven](http://www.bigoven.com/) API.

## Installation

BigOven API Client for PHP can be installed with [Composer](http://getcomposer.org)
by adding it as a dependency to your project's composer.json file.

```json
{
    "require": {
        "cpliakas/bigoven-php": "*"
    }
}
```

Please refer to [Composer's documentation](https://github.com/composer/composer/blob/master/doc/00-intro.md#introduction)
for more detailed installation and usage instructions.

## Usage

```php

require 'vendor/autoload.php';

$bigOven = \BigOven\BigOvenClient::factory(array(
    'api_key'  => 'my-api-key',
    'username' => 'my-username',
    'password' => 'my-password',
));

$recipes = $bigOven->findRecipesByTitle('cheese');

```
