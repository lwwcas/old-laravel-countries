<?php

namespace Lwwcas\LaravelCountries\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Country extends Model
{
    use Translatable;

    public $translationModel = 'Lwwcas\LaravelCountries\Models\CountryTranslation';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';

    public $translatedAttributes = [
        'slug',
        'name',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'iso_alpha_2',
        'iso_alpha_3',
        'iso_numeric',
        'international_phone',
        'visible',
        'country_region_id',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'visible' => true,
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'visible' => 'boolean',
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
     * Get all countries with translations
     * in a optimized query
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public static function _all()
    {
        return self::withTranslation()->get();
    }

    /**
     * Find a country by slug.
     *
     * @param string $slug
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereSlug($query, $slug)
    {
        return $query->whereTranslation('slug', $slug)->withTranslation();
    }

    /**
     * Find a country by name.
     *
     * @param string $name
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereName($query, $name)
    {
        return $query->whereTranslation('name', $name)->withTranslation();
    }

    /**
     * Find a country by iso.
     *
     * @param string $iso
     * @param int    $country_region_id
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereIso($query, $iso, $country_region_id)
    {
        return $query->where('country_region_id', $country_region_id)->where('iso', $iso)->withTranslation();
    }

    /**
     * Find a country by uuid.
     *
     * @param string $uuid
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereUuid($query, $uuid)
    {
        return $query->where('uuid', $uuid)->withTranslation();
    }
}
