<?php

namespace Lwwcas\LaravelCountries\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Company\Entities\Company;

class CountryRegion extends Model
{
    use Translatable;

    protected $table = 'countries_regions';

    public $translatedAttributes = [
        'slug',
        'name',
    ];

    protected $fillable = [
        'uuid',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    /**
     * Find a region by slug.
     *
     * @param  string  $slug
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereSlug($query, $slug){
        return $query->whereTranslation('slug', $slug)->withTranslation();
    }

    /**
     * Find a region by uuid.
     *
     * @param  string  $uuid
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereUuid($query, $uuid){
        return $query->where('uuid', $uuid)->withTranslation();
    }
}
