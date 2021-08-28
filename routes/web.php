<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\EnergiesystemeController;
use App\Http\Controllers\CreateController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/mainpage', function () {
    return view('MainPage');
});

*/
Route::get('/', [Controller::class,'index']); 
Route::get('/energiesysteme', [EnergiesystemeController::class,'index'])->name('energiesysteme'); 
Route::get('/energiesysteme/create', [CreateController::class,'index']);
Route::post( '/energiesysteme/create','EnergiesystemeController@index') ;



Route::resource('/energiesysteme', EnergiesystemeController::class);
//Posts endpoint

Route::get('/posts', [PostsController::class,'index']);