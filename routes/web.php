<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


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
    return view('choice');
})->name('choice');

Route::middleware('auth')->group(function() {
    Route::resource('users', UserController::class);
    Route::get('users/{user:name}', [UserController::class, 'showByName'])->name('profile');

    Route::get('/feed', function() {
        return view('user.feed');
    })->name('feed');

    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::middleware('guest')->group(function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
