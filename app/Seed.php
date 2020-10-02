<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Seed extends Model
{
    public function run()
    {
           User:: create([
            'name' => "Sasha".Str::random(1),
            'email' => Str::random(3).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
