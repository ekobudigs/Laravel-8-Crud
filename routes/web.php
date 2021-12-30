<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileInformationController;


// Cara Menggunakan Invoke

Route::get('/', HomeController::class);





Route::get('users', [UserController::class, 'index']);
Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');


Route::middleware('auth')->group(function () {
    Route::post('logout', LogoutController::class)->name('logout');
    Route::resource('tasks', TaskController::class)->middleware('auth');
});


Route::middleware('guest')->group(function () {
    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store']); //valid jika ingin di panggil nama route di formnya
    
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});


// Route::get('tasks', [TaskController::class, 'index']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);
// Route::get('tasks/create', [TaskController::class, 'create']);





// Route::get('/profile/{identifer}', ProfileInformationController::class);
// Route::get('contac', [ContacController::class, 'create']);
// Route::post('contac', [ContacController::class, 'store']);






















// Cara Simpel untuk get
// Route::get('/', fn () => view('home'));

// Cara Simple Untuk Menampilkan Data Ke view
// $appName = "Laravel 8";
// Route::view('/', 'home', ['appName' => $appName]);


// simple View
// Route::view('contac', 'contac');
// Route::view('about', 'about');


// Route::view('posts/first-post', 'posts.show');





// Route::get('/', function () {
//     return view('home');
// });


// Route::get('profile', function () {
//     $name = "Eko Budi";
//     return view('profile', [
//         'name' => $name,
//     ]);
// });


// // cara buat wilcard
// Route::get('profile/{username}', function ($username) {

//     // $name = $request->name;
//     return view('profile', ['name' => $username]);
// });


// // cara buat wilcard lebih dari 1
// Route::get('profile/{username}/{post}', function ($username, $post) {

//     // $name = $request->name;
//     return view('profile', ['name' => $username, 'post' => $post]);
// });
