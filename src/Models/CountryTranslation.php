<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Model;

class CountryTranslation extends Model
{
    public $timestamps = false;

    protected $table = 'country_translations';

    protected $fillable = [
        'slug',
        'name',
    ];
}
