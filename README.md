# Faker Besson Scenario

Provider for creating fake scenarios

# Faker Cinema

[![Packagist](https://img.shields.io/packagist/dt/xylis/faker-besson-scenario-provider.svg?style=flat-square)](https://packagist.org/packages/xylis/faker-besson-scenario-provider)
[![Travis Build Status](https://img.shields.io/travis/JulienRAVIA/FakerBessonScenarioProvider/master?style=flat-square)](https://travis-ci.org/JulienRAVIA/FakerBessonScenarioProvider)

A growing collection of useful Providers for [fzaninotto/faker](https://github.com/fzaninotto/faker) mostly ported to PHP from the [stympy/faker](https://github.com/stympy/faker) Ruby library.

## Contents

1. [Installation](#installation)
1. [Available Formatters](#formatters)
1. [Contributing](#contributing)

## Installation

```bash
composer require xylis/faker-besson-scenario-provider
```

## Formatters

Below is the list of bundled formatters in the default locale.

### `Xylis\FakerCinema\Provider\BessonScenario`

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Xylis\FakerCinema\Provider\BessonScenario($faker));

$faker->scenario; // Un Dauphin tueur à gages fait une poursuite en Taxi avec des roumains
$faker->basicScenario; // Nikita pète la gueule à des chinois déguisés en Père Noel en banlieue

$faker->scenarios(2); // array
$faker->basicScenarios(2); // array
```

## Contributing

All contributions are welcome. Before opening PRs, make sure that all tests are passing, and that code coverage is satisfactory:

```bash
.\vendor\bin\phpunit
```