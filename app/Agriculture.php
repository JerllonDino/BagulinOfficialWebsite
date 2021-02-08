<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agriculture extends Model
{
    protected $table = 'agricultures';

    protected $fillable = [
        'order',
        'product_name',
        'product_description',
    ];
    
    public function agriproduct_images()
    {
        return $this->hasMany(AgriProductImages::class);
    }
}
