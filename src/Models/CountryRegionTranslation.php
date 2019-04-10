<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Model;

class CountryRegionTranslation extends Model
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $table = 'countries_regions_translations';

    protected $fillable = [
        'slug',
        'name',
    ];
}
