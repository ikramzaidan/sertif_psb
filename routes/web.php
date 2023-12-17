<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;

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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'auth'])->middleware('guest')->name('login.auth');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');
Route::get('/register/{id}', [RegisterController::class, 'show'])->middleware('guest')->name('register.show');
Route::get('/register/{id}/print', [RegisterController::class, 'print'])->middleware('guest')->name('register.print');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile', [UserController::class, 'profile_update'])->name('profile.update');
    Route::get('/profile/{id}/print', [UserController::class, 'profile_print'])->name('profile.print');

    Route::resource('/users', UserController::class);

    Route::resource('/students', StudentController::class);

    Route::get('/logout', [LoginController::class, 'destroy']);
});

Route::get('/getProvinces', [AddressController::class, 'province']);
Route::get('/getCities/{id}', [AddressController::class, 'city']);
Route::get('/getDistricts/{id}', [AddressController::class, 'district']);


