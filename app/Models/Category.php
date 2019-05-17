<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'name_ru',
        'name_en',
        'id_section',
    ];
    protected $table = 'categories';
}
