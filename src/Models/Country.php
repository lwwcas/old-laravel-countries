<?php

namespace Lwwcas\LaravelCountries\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Company\Entities\Company;

class Country extends Model
{
    use Translatable;

    protected $table = 'countries';

    public $translatedAttributes = [
        'slug',
        'name',
    ];

    protected $fillable = [
        'uuid',
        'iso-a2',
        'iso-a3',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    /**
     * Find a country by slug.
     *
     * @param  string  $slug
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereSlug($query, $slug){
        return $query->whereTranslation('slug', $slug)->withTranslation();
    }

    /**
     * Find a country by iso.
     *
     * @param  string  $iso
     * @param  integer  $country_region_id
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereIso($query, $iso, $country_region_id){
        return $query->where('country_region_id', $country_region_id)->where('iso', $iso)->withTranslation();
    }

}

