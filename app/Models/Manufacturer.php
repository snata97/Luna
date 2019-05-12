<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];
    protected $table = 'manufacturers';
}
