<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image_product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'id_product',
    ];
    protected $table = 'image_product';
}
