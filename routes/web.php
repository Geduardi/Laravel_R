<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('main');
})->name('home');


Route::get('/news/category/{categoryId}', [CategoryController::class, 'allByCategory'])->name('news');

Route::get('/news/{id}', [NewsController::class, 'one'])->name('news.id');

Route::get('/category', [CategoryController::class, 'all'])->name('category');
