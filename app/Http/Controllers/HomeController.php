<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    //cara menggunakan invoke
    public function __invoke()
    {
        return view('home');
    }
}
