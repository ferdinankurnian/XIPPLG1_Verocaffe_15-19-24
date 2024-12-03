<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/menus/filter/{category_id}', [HomeController::class, 'filterMenus'])->name('menus.filter');
Route::get('/menu/{id}', [HomeController::class, 'getMenu'])->name('menu.show');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginProcess'])->name('login.process');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerProcess'])->name('register.process');

Route::get('/member', [UserController::class, 'member'])->name('member');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/member', [UserController::class, 'member'])->name('member');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
