![Packagist Version](https://img.shields.io/packagist/v/lwwcas/laravel-countries.svg) ![Open Issues](https://img.shields.io/github/issues-raw/lwwcas/laravel-countries.svg) ![License](https://img.shields.io/github/license/lwwcas/laravel-countries.svg) ![Analysis by StyleCI](https://github.styleci.io/repos/145844689/shield)

## Requirements
- Laravel >= 5.5
- PHP >= 7
- [dimsav/laravel-translatable](https://github.com/dimsav/laravel-translatable)

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

## Licence

MIT


