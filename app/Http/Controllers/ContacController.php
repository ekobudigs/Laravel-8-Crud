<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContacController extends Controller
{
    public function create()
    {
        return view('contac');
    }
    public function store()
    {
        dd('submited');
    }
}
