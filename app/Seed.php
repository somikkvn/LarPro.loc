<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
    public function select()
    {
        $users = DB::table('users')->select('name', 'email')->get();
        var_dump($users);
    }
}
