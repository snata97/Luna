<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $fillable = [
        'login',
        'password',
        'root',
    ];
    protected $table = 'administrators';
}
