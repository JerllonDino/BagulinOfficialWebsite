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
Route::post('/views-counter', 'DailyPageViewsController@add');
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

Route::get('/official-documents', 'DocumentsController@index');
Route::get('/get-documents', 'DocumentsController@getFiles');

Route::prefix('admin')->group(function () {
    Route::get('/documents/{category?}', 'Admin\OfficialDocuments@index');

    Route::view('/dashboard', 'admin/dashboard');
    Route::get('/page-views/get', 'Admin\AdminDailyPageViews@get');

    Route::prefix('announcements')->group(function () {
        Route::get('/', 'Admin\Announcements@index');
        Route::get('/read/{slug}', 'Admin/Announcements@read');

        Route::put('/update', 'Admin\Announcements@update');
        Route::get('/edit/{id}', 'Admin\Announcements@edit');

        Route::view('/add', 'admin/new-announcement');
        Route::post('/save', 'Admin\Announcements@save');

        Route::delete('/delete', 'Admin\Announcements@delete');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', 'Admin\UserController@index');
        Route::post('/get', 'Admin\UserController@get');
        Route::post('/store', 'Admin\UserController@store');
        Route::delete('/delete', 'Admin\UserController@delete');
        Route::put('/update', 'Admin\UserController@update');
    });

    Route::post('/upload-documents', 'Admin\OfficialDocuments@save');
    Route::delete('/delete-document', 'Admin\OfficialDocuments@delete');
    Route::put('/rename-document', 'Admin\OfficialDocuments@rename');
    Route::post('/new-document-category', 'Admin\OfficialDocuments@addCategory');
    Route::delete('/delete-document-category', 'Admin\OfficialDocuments@deleteCategory');
    Route::put('/rename-document-category', 'Admin\OfficialDocuments@renameCategory');

    Route::get('/', 'Auth\LoginController@index');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/password/confirm', 'Auth\ConfirmPasswordController@confirm');
    Route::get('/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('/password/reset', 'Auth\ResetPasswordController@showLinkRequestForm')->name('password.request');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('showResetForm');
    Route::post('/register', 'Auth\RegisterController@register');
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
