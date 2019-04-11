<?php

namespace Lwwcas\LaravelCountries\Database\factories;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\CountryRegion;

$factory->define(CountryRegion::class, function (Faker $faker) {
    $rand = rand(0, 4);
    $regions = [
        'Africa',
        'Americas',
        'Asia',
        'Europe',
        'Oceania',
    ];

    return [
        'uuid' => (string) Str::uuid(),
        'en'   => [
            'slug' => Str::slug($regions[$rand], '-') . '-' . (string) Str::uuid(),
            'name' => $regions[$rand] . '-' . 'factory',
        ],
    ];
});
