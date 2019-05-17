<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name_en',
        'name_ru',
        'vendor_code',
        'price',
        'composition_ru',//состав
        'composition_en',
        'description_en',//описание
        'description_ru',
        'collection_en',
        'collection_ru',
        'size',
        'id_manufactured',
        'id_category',
    ];
    protected $table = 'products';
}
