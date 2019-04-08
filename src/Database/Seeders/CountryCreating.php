<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Lwwcas\LaravelCountries\Models\Country;
use Lwwcas\LaravelCountries\Models\CountryRegion;
use Lwwcas\LaravelCountries\Models\CountryRegionTranslation;
use Lwwcas\LaravelCountries\Models\CountryTranslation;

class CountryCreating
{
    public function run($countries)
    {
        foreach ($countries as $name => $region) {
            foreach ($region as $iso => $country) {
                $rg = CountryRegion::whereSlug($name)->first();
                $slug = Country::whereSlug(str_slug($country, '-'))->first() != null ? str_slug($rg->slug.'-'.$country, '-') : str_slug($country, '-');
                Country::create([
                    'country_region_id' => $rg->id,
                    'iso'               => $iso,
                    'en'                => [
                        'slug' => $slug,
                        'name' => $country,
                    ],
                ]);
            }
        }
    }

    public function add($countries, $locale)
    {
        foreach ($countries as $regionSlug => $region) {
            $localeSlug = str_slug($region['name'], '-');
            $rg = CountryRegion::whereSlug($localeSlug)->first();
            if ($rg != null) {
                $localeSlug = str_slug($locale.'_'.$region['name'], '-');
                if (CountryRegion::whereSlug($localeSlug)->first() != null) {
                    $localeSlug = str_slug($locale.'_'.$region['name'].'-'.time(), '-');
                }
            }

            $localeRegion = CountryRegion::whereSlug($regionSlug)->first();
            CountryRegionTranslation::create([
                'country_region_id' => $localeRegion->id,
                'name'              => $region['name'],
                'slug'              => $localeSlug,
                'locale'            => $locale,
            ]);

            foreach ($region['countries'] as $iso => $country) {
                $localeSlug = str_slug($country, '-');
                $validation = Country::whereSlug($localeSlug)->first();
                if ($validation != null) {
                    $localeSlug = str_slug($country.'-'.$regionSlug, '-');
                    if (Country::whereSlug($localeSlug)->first()) {
                        $localeSlug = str_slug($country.'-'.$regionSlug.'-'.time(), '-');
                    }
                }
                $ctr = Country::whereIso($iso, $localeRegion->id)->first();
                CountryTranslation::create([
                    'country_id' => $ctr->id,
                    'name'       => $country,
                    'slug'       => $localeSlug,
                    'locale'     => $locale,
               ]);
            }
        }
    }
}
