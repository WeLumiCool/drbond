<?php

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
    return view('welcome',['articles' => \Illuminate\Support\Facades\DB::table('articles')->inRandomOrder()->limit(4)->get()]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'articles'])->name('articles');
Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class, 'show'])->name('article');
Route::get('/service/1', [App\Http\Controllers\ServiceController::class, 'service_1'])->name('service/1');
Route::get('/service/2', [App\Http\Controllers\ServiceController::class, 'service_2'])->name('service/2');
Route::get('/service/3', [App\Http\Controllers\ServiceController::class, 'service_3'])->name('service/3');
Route::get('/service/4', [App\Http\Controllers\ServiceController::class, 'service_4'])->name('service/4');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
