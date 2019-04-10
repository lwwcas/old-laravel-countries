<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Model;

class CountryTranslation extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $table = 'country_translations';

    protected $fillable = [
        'slug',
        'name',
    ];
}
