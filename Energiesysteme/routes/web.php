<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EnergiesystemController;

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


//Route::get('/posts',[PostsController::class, 'index']);

Route::resource('/', EnergiesystemController::class);

//Route::get('/',[EnergiesystemController::class, 'index']);

Route::get('/edit/{id}',[EnergiesystemController::class, 'edit']);
Route::get('/update/{id}',[EnergiesystemController::class, 'update']);
Route::get('/delete/{id}',[EnergiesystemController::class, 'destroy']);


Route::get('/kartendienst',[EnergiesystemController::class, 'kartendienst']);



