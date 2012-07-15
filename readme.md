# Fuel Cities Package

A super simple Cities package for Fuel.

## About
* Version: 1.0.0
* Author: Derek Myers

## Installation

### Git Submodule

If you are installing this as a submodule (recommended) in your git repo root, run this command:

	$ git submodule add git://github.com/dmyers/fuel-cities.git fuel/packages/cities

Then you you need to initialize and update the submodule:

	$ git submodule update --init --recursive fuel/packages/cities/

###Download

Alternatively you can download it and extract it into `fuel/packages/cities/`.

## Setup

### Run migrations

Run the migrations which will create the table structure in your database.

	$ php oil r migrate --packages=cities

### Run task

Run the oil task which will download and import the [MaxMind](http://maxmind.com) cities databases into your database.

	$ php oil r cities

## Usage

```php
$city = Model_City::find_using_slug('us', 'ca', 'san-francisco');
```

Or if using the [Geolocate](https://github.com/dmyers/fuel-geolocate) package, you can simply get the visitor's location by their IP.
```php
$city = Model_City::find_using_ip();
```

## Updates

In order to keep the package up to date simply run:

	$ git submodule update --recursive fuel/packages/cities/
