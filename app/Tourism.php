<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourism extends Model
{
    protected $table = 'tourisms';

    protected $fillable = [
        'order',
        'spot_name',
        'spot_description',
        'spot_location',
        'spot_geolocation'
    ];

    public function tourism_images()
    {
        return $this->hasMany('App\TourismImages', 'tourism_id');
    }
}
