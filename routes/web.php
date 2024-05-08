<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConnectionController;


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
    Route::resource('users', UserController::class)->names([
        'index' => 'user.index',
        'show' => 'user.show',
        'showByName' => 'user.showByName'
    ]);
    
    Route::get('users/{user:name}', [UserController::class, 'showByName'])->name('profile');

    Route::get('/feed', function() {
        return view('user.feed');
    })->name('feed');

    Route::resource('connections', ConnectionController::class)->names([
        'index' => 'connection.index',
        'show' => 'connection.show',
        'store' => 'connection.store'
    ]);;

    Route::get('/friends', [ConnectionController::class, 'show'])->name('friends');

    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::middleware('guest')->group(function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
