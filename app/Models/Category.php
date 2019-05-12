<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'name',
        'id_section',
    ];
    protected $table = 'categories';
}
