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
Route::prefix('municipality')->group(function () {
    Route::view('message', 'pages/municipality/message');
    Route::view('vision-mission', 'pages/municipality/general/vision-mission');
    Route::view('history', 'pages/municipality/general/history');
    Route::view('hymns', 'pages/municipality/general/hymns');
    Route::view('government/barangay/chairmans', 'pages/municipality/government/barangay/chairmans');
    Route::view('government/barangay/skchairmans', 'pages/municipality/government/barangay/skchairmans');
    Route::view('government/officials/councilors', 'pages/municipality/government/officials/councilors');
    Route::view('government/officials/mayor', 'pages/municipality/government/officials/mayor');
    Route::view('government/officials/vice-mayor', 'pages/municipality/government/officials/vice-mayor');
    Route::view('government/past-executives', 'pages/municipality/government/past_executives/index');
    Route::view('government/past-executives', 'pages/municipality/government/past_executives/index');
    Route::view('profile/education', 'pages/municipality/profile/education');
    Route::view('profile/geophysical', 'pages/municipality/profile/geophysical');
    Route::view('profile/health', 'pages/municipality/profile/health');
    Route::view('profile/infrastructure', 'pages/municipality/profile/infrastructure');
    Route::view('profile/local-economy', 'pages/municipality/profile/local-economy');
    Route::view('profile/local', 'pages/municipality/profile/local');
    Route::view('profile/population', 'pages/municipality/profile/population');
});

Route::prefix('agri-tour')->group(function () {
    Route::view('agriculture', 'pages/municipality/general/agriculture');
    Route::view('tourism', 'pages/municipality/general/tourism');
});

Route::view('/official-documents', 'pages/official_documents');

Route::prefix('admin')->group(function () {
    Route::get('/documents/{category?}', 'Admin\OfficialDocuments@index');

    Route::prefix('announcements')->group(function () {
        Route::get('/', 'Admin\Announcements@index');
        Route::get('/read/{slug}', 'Admin/Announcements@read');

        Route::put('/update', 'Admin\Announcements@update');
        Route::get('/edit/{id}', 'Admin\Announcements@edit');

        Route::view('/add', 'admin/new-announcement');
        Route::post('/save', 'Admin\Announcements@save');

        Route::delete('/delete', 'Admin\Announcements@delete');
    });

    Route::post('/upload-documents', 'Admin\OfficialDocuments@save');
    Route::delete('/delete-document', 'Admin\OfficialDocuments@delete');
    Route::put('/rename-document', 'Admin\OfficialDocuments@rename');
    Route::post('/new-document-category', 'Admin\OfficialDocuments@addCategory');
});