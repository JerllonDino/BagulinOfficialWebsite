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
Route::view('/municipality/government/barangay/chairmans', 'pages/municipality/government/barangay/chairmans');
Route::view('/municipality/government/barangay/skchairmans', 'pages/municipality/government/barangay/skchairmans');
Route::view('/municipality/government/officials/councilors', 'pages/municipality/government/officials/councilors');
Route::view('/municipality/government/officials/mayor', 'pages/municipality/government/officials/mayor');
Route::view('/municipality/government/officials/vice-mayor', 'pages/municipality/government/officials/vice-mayor');
Route::view('/municipality/government/past-executives', 'pages/municipality/government/past_executives/index');
Route::view('/official-documents', 'pages/official_documents');

Route::prefix('admin')->group(function () {
    Route::get('/documents/{category?}', 'Admin\OfficialDocuments@index');
    Route::post('/upload-documents', 'Admin\OfficialDocuments@save');
    Route::delete('/delete-document', 'Admin\OfficialDocuments@delete');
});