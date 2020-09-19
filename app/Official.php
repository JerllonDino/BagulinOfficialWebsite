<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $table = 'officials';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'position',
        'about_message',
        'welcome_message',
    ];
}
