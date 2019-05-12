<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_promoution extends Model
{
    protected $fillable = [
        'id_category',
        'id_promotion',
    ];
    protected $table = 'category_promotion';
}
