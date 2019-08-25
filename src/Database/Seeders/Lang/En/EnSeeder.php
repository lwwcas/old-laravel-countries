<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Lang\En;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\En\AfricaSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\En\AmericasSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\En\AsiaSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\En\EuropeSeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\En\OceaniaSeeder;
use Lwwcas\LaravelCountries\Models\CountryBuilder;

class EnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $regions = [
            'Africa',
            'Americas',
            'Asia',
            'Europe',
            'Oceania',
        ];

        CountryBuilder::createRegion($regions, 'en');

        $this->call(AfricaSeeder::class);
        $this->call(AmericasSeeder::class);
        $this->call(AsiaSeeder::class);
        $this->call(EuropeSeeder::class);
        $this->call(OceaniaSeeder::class);
    }
}
