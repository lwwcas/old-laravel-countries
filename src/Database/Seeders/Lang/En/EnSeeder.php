<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Lang\En;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Lang\En\AfricaSeeder;

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

        $this->call(AfricaSeeder::class);
        $this->call(AmericasSeeder::class);
        $this->call(AsiaSeeder::class);
        $this->call(EuropeSeeder::class);
        $this->call(OceaniaSeeder::class);
    }
}
