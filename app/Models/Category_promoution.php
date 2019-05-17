<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_promoution extends Model
{
    protected $fillable = [
        'id_category',
        'id_promotion',
    ];
    protected $table = 'category_promotion';
}
