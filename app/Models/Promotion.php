<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
        'id',
        'name_ru',
        'name_en',
        'discount',
        'start',
        'end',

    ];
    protected $table = 'promotions';
}

