<?php

namespace App\Http\Controllers;

use App\Axios;
use Illuminate\Http\Request;

class AxiosController extends Controller
{
    public function test()
    {
        return view('axiosRegister');
    }
}
