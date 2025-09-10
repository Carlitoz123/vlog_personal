<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $table="comments";
    protected $fillable = [
        'user_id',
        'post_id',
        
    ];
}
