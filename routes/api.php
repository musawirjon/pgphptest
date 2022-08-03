<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/comment/{id}', [App\Http\Controllers\HomeController::class, 'showUserComments'])->name('comment'); 
Route::get('/comment/{id}', [App\Http\Controllers\HomeController::class, 'showUserComments'])->name('comment'); 
Route::post('/appendUserComments', [App\Http\Controllers\HomeController::class, 'appendUserComments'])->name('appendUserComments'); 
