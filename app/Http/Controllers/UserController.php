<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 

    {
        return view('users.index', [
            'users' => User::get(),
        ]);
    }


    public function show(User $user)
    {
        // $user = User::find($id);
        return view('users.show', compact('user'));
    }
}
