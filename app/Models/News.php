<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'id',
        'date',
        'title_ru',
        'title_en',
        'body_ru',
        'body_en',
    ];
    protected $table = 'news';
}
