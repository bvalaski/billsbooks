<?php

use App\Http\Livewire\LWAuthors;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


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

Route::get('/',        [PagesController::class,'index']);
Route::get('/home',    [PagesController::class,'home']);
Route::get('/authors', [PagesController::class,'authors']);
Route::get('/genres',  [PagesController::class,'genres']);
Route::get('/series',  [PagesController::class,'series']);

Route::get('/LWAuthors', function (){
    return view('authors.lwauth');
});

Route::Resource('Books', 'App\Http\Controllers\BooksController');
Route::Resource('Genres', 'App\Http\Controllers\GenresController');
Route::Resource('Authors', 'App\Http\Controllers\AuthorsController');
Route::Resource('Series', 'App\Http\Controllers\SeriesController');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
