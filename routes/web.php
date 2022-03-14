<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::any('/test', function () {
    return view('test');
})->middleware(['auth'])->name('test');

Route::post('/test', [UploadController::class, 'store']);

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth'])->name('home');

Route::get('/users', function () {
    return view('users');
})->middleware(['auth'])->name('users');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');;

require __DIR__.'/auth.php';
