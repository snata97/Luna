<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review_users extends Model
{
    protected $fillable = [
        'id_review',
        'id_user',
    ];
    protected $table = 'review_user';
}
