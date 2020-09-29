<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apipost extends Model
{
    protected $fillable = [
        'title', 'description',
    ];
}

