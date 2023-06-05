<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home1');
});

Route::get('/home', function () {
    return view('home1');
});

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/login1', function () {
//     return view('login');
// });
Route::get('/cours', [App\Http\Controllers\CourController::class, 'index'])->name('cours');


Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/video1', function () {
    return view('video1');
});

Route::get('/video2', function () {
    return view('video2');
});

Route::get('/video3', function () {
    return view('video3');
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
