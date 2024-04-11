<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;


Route::get('/', function () {
    return view('login');
});

Route::get('/developer', function () {
    return view('developer');
})->name('dev');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginpost'])->name('login.post');

Route::get('/signup', [AuthManager::class, 'signup'])->name('signup');
Route::post('/signup', [AuthManager::class, 'signuppost'])->name('signup.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');