<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourismImages extends Model
{
    protected $table = 'tourism_images';

    protected $fillable = [
        'order',
        'file_name'
    ];

    public function tourisms()
    {
        return $this->belongsTo('App\Tourism', 'tourism_id');
    }
}
