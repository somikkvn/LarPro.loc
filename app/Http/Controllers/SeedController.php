<?php

namespace App\Http\Controllers;
use App\Seed;
class SeedController extends Controller

{
    public function run()
    {
        $model = new Seed();
        $model->run();
    }

}
