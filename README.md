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
