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

Route::get('', [cobacontroller::class, 'index']);
Route::get('/friends', [cobacontroller::class, 'index']);
Route::get('/friends/create', [cobacontroller::class, 'create']);
Route::post('/friends/store', [cobacontroller::class, 'store']);