<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'date',
        'cost',
        'address',
        'id_user',
    ];
    protected $table = 'orders';
}
