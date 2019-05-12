<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
        'id',
        'name',
        'discount',
        'start',
        'end',

    ];
    protected $table = 'promotions';
}

