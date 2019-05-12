<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'vendor_code',
        'price',
        'composition',
        'description',
        'collection',
        'size',
        'id_manufactured',
        'id_category',
    ];
    protected $table = 'products';
}
