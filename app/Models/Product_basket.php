<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_basket extends Model
{
    protected $fillable = [
        'id_product',
        'login',
    ];
    protected $table = 'product_basket';
}
