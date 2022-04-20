<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MatchStrController;

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
Route::controller(AuthController::class)->group(function() {
   Route::get('/', 'login')->name('login');
   Route::post('/login','authenticate')->name('authenticate');
});

Route::middleware('auth')->group(function(){
   Route::resource('/match-strings', MatchStrController::class);
   Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

