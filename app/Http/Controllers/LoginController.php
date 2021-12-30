<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    // public function __construct()
    // {
    //   $this->middleware('guest');   
    // }

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
       $atributtes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // $credetianl = ['email' => $request->email, 'password' => $request->password];


        if(Auth::attempt($atributtes)){
            return redirect(RouteServiceProvider::HOME)->with('success', 'youre are now login ');
        }

        // $user = User::whereEmail($request->email)->first();

        // if ($user) {
        //     if (Hash::check($request->password, $user->password)){
        //          Auth::login($user);

        //          return redirect('/')->with('success', 'youre are now login ');
                
        //     }
        // }

        throw ValidationException::withMessages([
            'email' => 'youre provide creditian does not match our records.'
        ]); 
        

    }
}
