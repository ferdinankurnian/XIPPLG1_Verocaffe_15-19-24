<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menus/filter/{category_id}', [HomeController::class, 'filterMenus'])->name('menus.filter');
Route::get('/login', [UserController::class, 'login'])->name('login');