<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_order extends Model
{
    protected $fillable = [
        'id_order',
        'id_product',
        'quantity',
        'size',
    ];
    protected $table = 'product_order';
}
