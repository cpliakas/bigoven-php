# BigOven API Client for PHP

[![Build Status](https://travis-ci.org/cpliakas/bigoven-php.png)](https://travis-ci.org/cpliakas/bigoven-php)
[![Coverage Status](https://coveralls.io/repos/cpliakas/bigoven-php/badge.png?branch=master)](https://coveralls.io/r/cpliakas/bigoven-php?branch=master)
[![Total Downloads](https://poser.pugx.org/cpliakas/bigoven-php/downloads.png)](https://packagist.org/packages/cpliakas/bigoven-php)
[![Latest Stable Version](https://poser.pugx.org/cpliakas/bigoven-php/v/stable.png)](https://packagist.org/packages/cpliakas/bigoven-php)
[![API Testing](https://img.shields.io/badge/API%20Test-RapidAPI-blue.svg)](https://rapidapi.com/package/BigOven/functions?utm_source=BigOvenGithub&utm_medium=button&utm_content=Vender_GitHub)

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

// Instantiate the client class that consumes the API.
$bigOven = \BigOven\BigOvenClient::factory(array(
    'api_key'  => 'my-api-key',
    'username' => 'my-username',
    'password' => 'my-password',
));

// Get a recipe by ID and display the title.
$recipe = $bigOven->getRecipe('12345');
echo $recipe->title() . PHP_EOL;

// List the ingredients.
echo 'Ingredients: ' . PHP_EOL;
foreach ($recipe as $ingredient) {
  echo $ingredient->name() . PHP_EOL;
}

// Show the user who posted the recipe.
echo 'Posted by: ' . $recipe->poster()->userName() . PHP_EOL;

// Get a list of recipes that have "cheese" in the title.
$recipes = $bigOven->findRecipesByTitle('cheese');

```
