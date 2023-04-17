<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\NewsController;
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
// public
Route::get('/', [MoviesController::class,'public']);
Route::get('/movie/{id}', [MoviesController::class,'publicShow']);
Route::get('/news', [NewsController::class, 'newsPublic']);
Route::get('/news/{id}', [NewsController::class, 'showPublic']);

Route::get('/dashboard',[MoviesController::class,'admin']
)->middleware(['auth', 'verified'])->name('dashboard');
// auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// admin
Route::resource('/dashboard/movie', MoviesController::class)->middleware('auth');
Route::resource('/dashboard/user', UsersController::class)->middleware('auth');
Route::resource('/dashboard/news',NewsController::class)->middleware('auth');
// Scrap
Route::post('/dashboard/scrap/imdb', [ScrapController::class, 'getMovie'])->middleware('auth');
Route::post('/dashboard/scrap/movie', [ScrapController::class, 'Scrap'])->middleware('auth');
Route::post('/dashboard/scrap', [ScrapController::class, 'scrapMovie'])->middleware('auth');
Route::get('/dashboard/scrap',[ScrapController::class, 'index'])->middleware('auth');
// Export
Route::get('/dashboard/userexport',[UsersController::class, 'userExport'])->middleware('auth');
Route::get('/dashboard/movieexport',[MoviesController::class, 'movieExport'])->middleware('auth');
require __DIR__.'/auth.php';