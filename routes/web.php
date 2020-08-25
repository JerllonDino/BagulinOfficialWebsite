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
Route::view('/', 'home');
Route::view('/municipality/message', 'pages/municipality/message');
Route::view('/municipality/vision-mission', 'pages/municipality/general/vision-mission');
Route::view('/municipality/history', 'pages/municipality/general/history');
Route::view('/municipality/hymns', 'pages/municipality/general/hymns');