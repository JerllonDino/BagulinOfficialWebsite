<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgriProductImages extends Model
{
    protected $table = 'agriproduct_images';

    protected $fillable = [
        'order',
        'file_name'
    ];

    public function agriculture()
    {
        return $this->belongsTo(Agriculture::class);
    }
}
