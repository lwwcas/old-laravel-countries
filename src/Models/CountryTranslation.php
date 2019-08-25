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

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'country_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id',
        'slug',
        'name',
    ];
}
