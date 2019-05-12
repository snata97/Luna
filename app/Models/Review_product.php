<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review_product extends Model
{
    protected $fillable = [
        'id_order',
        'id_review',
    ];
    protected $table = 'review_product';
}
