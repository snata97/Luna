<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'date',
        'cost',
        'address',
        'login',
    ];
    protected $table = 'orders';
}
