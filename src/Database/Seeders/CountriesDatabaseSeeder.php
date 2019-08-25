<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\En\EnSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\EsSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\FrSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\ItSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\PtSeeder;

class CountriesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // The English language is the base, do not move or comment
        // this line to ensure the package works well.
        $this->call(EnSeeder::class);

        // Countries by Language
        $this->call(PtSeeder::class);
        $this->call(EsSeeder::class);
        $this->call(FrSeeder::class);
        $this->call(ItSeeder::class);

    }
}
