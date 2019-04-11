<?php

namespace Lwwcas\LaravelCountries\Database\factories;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;

$factory->define(Country::class, function (Faker $faker) {
    $name = $faker->city;
    return [
        'uuid'      => (string) Str::uuid(),
        'iso'       => rand(1,500).rand(500,999),
        'visible'   => true,
        'en'        => [
            'slug' => Str::slug($name, '-') . '-' . (string) Str::uuid(),
            'name' => $name . '-' . 'factory',
        ],
        'country_region_id' => function () {
            return factory(CountryRegion::class)->create()->id;
        },
    ];
});
