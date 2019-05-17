<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review_product extends Model
{
    protected $fillable = [
        'id_product',
        'id_review',
    ];
    protected $table = 'review_product';
}
