<?php

namespace App\Http\Controllers;
use App\Seed;
class SeedController extends Controller

{
    public function index()
    {
        return view('seed');
    }
    public function run()
    {
        $model = new Seed();
        $model->run();
    }

    public function select()
    {
        $model = new Seed();
        $model->select();
    }

}
