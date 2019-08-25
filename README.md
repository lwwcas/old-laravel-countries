![World Map](assets/map.jpg)

![Packagist Version](https://img.shields.io/packagist/v/lwwcas/laravel-countries.svg) ![Open Issues](https://img.shields.io/github/issues-raw/lwwcas/laravel-countries.svg) ![License](https://img.shields.io/github/license/lwwcas/laravel-countries.svg)

## Description

This package gives you a list of countries, and puts them in the database, all countries can be searched by slug, iso_alpha_2, iso_alpha_3, iso_numeric or international_phone, and of course by its own name.


### Available Languages?

| Language        |
------------------|
| English         |
| Portuguese      |
| Spanish         |
| Italian         |


## Requirements
- Laravel >= 5.7
- PHP >= 7
- [dimsav/laravel-translatable](https://github.com/Astrotomic/laravel-translatable)

## Installation

- Require it with Composer:
```bash
composer require lwwcas/laravel-countries
```

- Run the command
```bash
composer dump-autoload
```

- Paste this line into database\seeds\DatabaseSeeder.php in run function
```bash
$this->call(CountriesDatabaseSeeder::class);
```

- Import class CountriesDatabaseSeeder
```bash
use Lwwcas\LaravelCountries\Database\Seeders\CountriesDatabaseSeeder;
```

- Run migrations
```bash
php artisan migrate
```

- OR run seeds
```bash
 php artisan db:seed
```

***

- OR run migrations and seeds
```bash
php artisan migrate --seed
```

## License

This software is released under [The MIT License (MIT)](LICENSE).

## Contributing

Pull requests and issues are more than welcome.
