<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'places';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'lat', 'lon', 'address1', 'address2', 'city', 'state', 'zip', 'website', 'phone'];

    /**
     * Relationship: Checkins
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function checkins()
    {
        return $this->hasMany('App\Models\Checkin');
    }
}
