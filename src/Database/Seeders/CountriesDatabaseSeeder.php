<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\CountriesRegionsSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\En\EnSeeder;

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


    }
}
