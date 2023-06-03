<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login-act', [AuthController::class, 'login_act']);
    Route::post('/register-act', [AuthController::class, 'register_act']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [TodoController::class, 'beranda']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('/todo-lists', TodoController::class);
});
Route::get('/users/users', [ApiController::class. 'index']);


Route::get('/test', function () {
    return view('test');
});