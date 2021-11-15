<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\NewTaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProfileController;

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
// route::get('/index', [IndexController::class, 'index'])->name('index');
route::get('/new-login',[LoginController::class, 'newLogin'])->name('new_login');

route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 
route::get('/dashboard/{user}', [DashboardController::class, 'indexx']); 

Route::get('/NewTask', [NewTaskController::class, 'index'])->name('NewTask');
route::post('/NewTask', [NewTaskController::class, 'store']);
route::delete('/NewTask/{NewTask}', [NewTaskController::class, 'destroy'])->name('NewTask.destroy');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/login', [LoginController::class, 'store']);

route::get('/settings', [SettingsController::class, 'index'])->name('settings');

// route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// route::post('/profile', [ProfileController::class, 'store']);
// route::get('/profile/{user}', [ProfileController::class, 'index'])->name('profile.show');

route::get('/register', [RegisterController::class, 'index'])->name('register');
route::post('/register', [RegisterController::class, 'store']);

// Route::get('/', function () {
//     return view('home');
// });
