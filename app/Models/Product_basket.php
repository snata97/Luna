<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_basket extends Model
{
    protected $fillable = [
        'id_product',
        'id_user',
    ];
    protected $table = 'product_basket';
}
