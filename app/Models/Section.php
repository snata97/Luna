<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'id',
        'name_ru',
        'name_en',
    ];
    protected $table = 'sections';
}
