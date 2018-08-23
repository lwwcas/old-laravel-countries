<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Models\CountryRegion;

class BaseCountriesRegionsSeeder extends Seeder
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

        foreach($regions as $region){
            CountryRegion::create([
                'en' => [
                    'slug' => str_slug($region, '-'),
                    'name' => $region,
                ],
            ]);
        }
    }
}
