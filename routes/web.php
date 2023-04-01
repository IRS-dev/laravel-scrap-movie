<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ScrapController;
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

Route::get('/', function(){
    return view('dashboard/build/index');
})->name('user');
Route::get('/dashboard', function () {
    return view('admin/index
    ');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('/dashboard/movie', MoviesController::class)->middleware('auth');
Route::resource('/dashboard/user', UsersController::class)->middleware('auth');

Route::get('/dashboard/scrap/imdb', [ScrapController::class, 'getMovie'])->middleware('auth');
Route::get('/dashboard/scrap',[ScrapController::class, 'linkScrap'])->middleware('auth');

require __DIR__.'/auth.php';