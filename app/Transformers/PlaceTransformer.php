<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Place;

class PlaceTransformer extends TransformerAbstract
{
    public function transform(Place $place)
    {
        return [
            'id'		=> (int) $place->id,
            'name'		=> $place->name,
            'lat'		=> (float) $place->lat,
            'lon'		=> (float) $place->lon,
            'address1'	=> $place->address1,
            'address2'	=> $place->address2,
            'city'		=> $place->city,
            'state'		=> $place->state,
            'zip'		=> $place->zip,
            'website'	=> $place->website,
            'phone'		=> $place->phone
        ];
    }
}