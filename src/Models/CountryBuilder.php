<?php

namespace Lwwcas\LaravelCountries\Models;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;
use Lwwcas\LaravelCountries\Models\CountryTranslation;

class CountryBuilder
{
    public static function create(Array $countries, String $region_slug, String $lang): Void
    {
        $region = CountryRegion::whereSlug($region_slug)->first();
        if ($region == null) {
            throw new Exception('Region ' . $region_slug . ' not found');
        }

        foreach ($countries as $country) {
            Country::create([
                'country_region_id' => $region->id,
                'iso_alpha_2' => $country['iso_alpha_2'],
                'iso_alpha_3' => $country['iso_alpha_3'],
                'iso_numeric' => $country['iso_numeric'],
                'international_phone' => $country['international_phone'],
                'visible' => true,
                $lang => [
                    'slug' => Str::slug($country['name']),
                    'name' => Str::title(trim($country['name'])),
                ],
             ]);
        }

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

    public static function addTranslation(Array $countries, String $lang): Void
    {
        DB::beginTransaction();

        foreach ($countries as $iso => $country) {
            $response = Country::where('iso_alpha_2', $iso)
                                    ->orWhere('iso_alpha_3', $iso)
                                    ->orWhere('iso_numeric', $iso)
                                    ->first();

            if ($response == null) {
                DB::rollBack();
                throw new Exception('Country ' . $country . ' not found');
            }

            CountryTranslation::create([
                'country_id' => $response->id,
                'locale' => $lang,
                'slug' => Str::slug($country, '-'),
                'name' => Str::title(trim($country)),
            ]);
        }

        DB::commit();

        return;
    }
}
