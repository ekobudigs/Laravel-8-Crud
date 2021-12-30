<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $request, $identifer)
    {


        return view('profile', ['username' => $identifer]);
    }
}
