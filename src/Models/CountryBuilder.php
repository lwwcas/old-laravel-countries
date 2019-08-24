<?php

namespace Lwwcas\LaravelCountries\Models;

use Exception;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\CountryRegion;

class CountryBuilder
{
    public static function create(Array $countries, String $region_slug, String $lang): Void
    {


        return;
    }

    public static function createRegion(Array $regions, String $lang): Void
    {
        if (count($regions) < 5) {
            throw new Exception('No 5 regions found in ' . $lang);
        }

        foreach ($regions as $region) {
            CountryRegion::create([
                $lang => [
                    'slug' => Str::slug($region, '-'),
                    'name' => Str::title(trim($region)),
                ],
            ]);
        }

        return;
    }
}
