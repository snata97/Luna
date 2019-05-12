<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review_users extends Model
{
    protected $fillable = [
        'id_rewiew',
        'login',
    ];
    protected $table = 'rewiew_user';
}
