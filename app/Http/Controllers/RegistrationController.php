<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegitrationRequest;

class RegistrationController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth');   
    // }

    public function create()
    {
        return view('auth.register');
    }

    public function store(RegitrationRequest $request)
    {


        User::create($request->all());
        return redirect('/')->with('successregisr', 'Thank You are now registered');

    //   $attribute =  $request->all();

    //    $user = User::where('email', $request->email)
    //    ->orWhere('username', $request->username)
    //    ->first();

    //    if($user ) {
    //        return back();
    //    }

    // $attribute['password'] = Hash::make($request->password);
      
    }
}
