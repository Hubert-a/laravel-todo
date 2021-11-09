<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewTaskController;
use App\Http\Controllers\DashboardController;

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
route::get('/index', [IndexController::class, 'index'])->name('index');

route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/NewTask', [NewTaskController::class, 'index'])->name('NewTask');
route::post('/NewTask', [NewTaskController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/login', [LoginController::class, 'store']);

route::get('/register', [RegisterController::class, 'index'])->name('register');
route::post('/register', [RegisterController::class, 'store']);

// Route::get('/', function () {
//     return view('home');
// });