<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Model;

class CountryRegionTranslation extends Model
{
    public $timestamps = false;

    protected $table = 'countries_regions_translations';

    protected $fillable = [
        'slug',
        'name',
    ];

}
