<?php

namespace Modules\Countries\Database\Seeders;

use Modules\Countries\Models\Country;
use Modules\Countries\Models\CountryRegion;

class CountryCreating
{

    public function run($countries)
    {
        foreach($countries as $name => $region){
            foreach($region as $iso => $country){
                $rg = CountryRegion::whereSlug($name)->first();
                $slug = Country::whereSlug(str_slug($country, '-'))->first() != null ? str_slug($rg->slug.'-'.$country, '-') : str_slug($country, '-');
                Country::create([
                    'country_region_id' => $rg->id,
                    'iso' => $iso,
                    'en' => [
                        'slug' => $slug,
                        'name' => $country,
                    ],
                ]);
            }
        }
    }

}
