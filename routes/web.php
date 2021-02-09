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

Route::get('/', 'HomeController@index');
Route::post('/views-counter', 'DailyPageViewsController@add');
Route::get('/read/{slug}', 'AnnouncementController@read');
Route::get('/announcements', 'AnnouncementController@index');

Route::get('/municipal-profile', 'MunicipalProfileController@index');
Route::get('/municipal-profile/get', 'MunicipalProfileController@getFiles');

Route::prefix('municipality')->group(function () {
    Route::get('message', 'OfficialController@getWelcome');
    Route::view('vision-mission', 'pages/municipality/general/vision-mission');
    Route::view('history', 'pages/municipality/general/history');
    Route::view('hymns', 'pages/municipality/general/hymns');
    Route::get('government/barangay/{position}', 'OfficialController@getOfficial');
    Route::get('government/officials/{position}', 'OfficialController@getOfficial');
    Route::view('government/past-executives', 'pages/municipality/government/past_executives/index');
    Route::view('profile/education', 'pages/municipality/profile/education');
    Route::view('profile/geophysical', 'pages/municipality/profile/geophysical');
    Route::view('profile/health', 'pages/municipality/profile/health');
    Route::view('profile/infrastructure', 'pages/municipality/profile/infrastructure');
    Route::view('profile/local-economy', 'pages/municipality/profile/local-economy');
    Route::view('profile/local', 'pages/municipality/profile/local');
    Route::view('profile/population', 'pages/municipality/profile/population');
});

Route::get('/citizens-charter', 'CitizensCharter@index');
Route::get('/citizens-charter/documents', 'CitizensCharter@getFiles');

Route::prefix('agri-tour')->group(function () {
    Route::get('agriculture', 'AgricultureController@index')->name('agricuture.home_index');
    Route::get('tourism', 'TourismController@index')->name('tourism.home_index');
});

Route::get('/official-documents', 'DocumentsController@index');
Route::get('/get-documents', 'DocumentsController@getFiles');

Route::prefix('bagulinDeLaunion/admin')->group(function () {
    Route::get('/documents/{category?}', 'Admin\OfficialDocuments@index');
    Route::get('/change-password', 'Admin\ChangePasswordController@index');
    Route::post('/update-password', 'Admin\ChangePasswordController@changePassword');

    Route::view('/dashboard', 'admin/dashboard');
    Route::get('/page-views/get', 'Admin\AdminDailyPageViews@get');

    Route::prefix('announcements')->group(function () {
        Route::get('/', 'Admin\Announcements@index');
        Route::get('/read/{slug}', 'Admin/Announcements@read');

        Route::put('/update', 'Admin\Announcements@update');
        Route::get('/edit/{id}', 'Admin\Announcements@edit');

        Route::view('/add', 'admin/new-announcement');
        Route::post('/save', 'Admin\Announcements@save');

        Route::post('/get-images', 'Admin\Announcements@getImages');
        Route::delete('/delete-image', 'Admin\Announcements@deleteImage');

        Route::delete('/delete-video', 'Admin\Announcements@deleteVideo');

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

    Route::prefix('citizens-charter')->group(function() {
        Route::get('/{category?}', 'Admin\CitizensCharterController@index');
        Route::post('/upload', 'Admin\CitizensCharterController@save');
        Route::delete('/delete', 'Admin\CitizensCharterController@delete');
        Route::put('/rename', 'Admin\CitizensCharterController@rename');
    });

    Route::prefix('officials')->group(function () {
        Route::get('/', 'Admin\OfficialController@index');
        Route::post('/get', 'Admin\OfficialController@get');
        Route::post('/get/position/{position}', 'Admin\OfficialController@getOfficialsByPosition');
        Route::post('/get/official/{id}', 'Admin\OfficialController@getOfficialsById');
        Route::post('/store/{count?}', 'Admin\OfficialController@saveOfficial');
        Route::delete('/delete', 'Admin\OfficialController@delete');
        Route::put('/update', 'Admin\OfficialController@saveOfficial');
        Route::delete('/delete/official/{id}', 'Admin\OfficialController@deleteOfficial');
    });

    Route::prefix('tourism')->group(function(){
        Route::get('/', 'Admin\TourismController@index')->name('tourism.index');
        Route::post('/store', 'Admin\TourismController@store')->name('tourism.store');
        Route::post('/get', 'Admin\TourismController@getDatatables')->name('tourism.get');
        Route::post('/get-spot', 'Admin\TourismController@getSpot')->name('tourism.get_spot');
        Route::delete('/delete', 'Admin\TourismController@deleteSpot')->name('tourism.delete_spot');
        Route::delete('/delete/image', 'Admin\TourismController@deleteImage')->name('tourism.delete_image');
    });

    Route::prefix('agriculture')->group(function(){
        Route::get('/', 'Admin\AgricultureController@index')->name('agriculture.index');
        Route::post('/store', 'Admin\AgricultureController@store')->name('agriculture.store');
        Route::post('/get', 'Admin\AgricultureController@getDatatables')->name('agriculture.get');
        Route::post('/get-product', 'Admin\AgricultureController@getProduct')->name('agriculture.get_product');
        Route::delete('/delete', 'Admin\AgricultureController@deleteProduct')->name('agriculture.delete_product');
        Route::delete('/delete/image', 'Admin\AgricultureController@deleteImage')->name('agriculture.delete_image');
    });

    Route::prefix('municipal-profile')->group(function() {
        Route::get('/{category?}', 'Admin\MunicipalProfileController@index');
        Route::post('/upload', 'Admin\MunicipalProfileController@save');
        Route::delete('/delete', 'Admin\MunicipalProfileController@delete');
        Route::put('/rename', 'Admin\MunicipalProfileController@rename');
        Route::post('/new-category', 'Admin\MunicipalProfileController@addCategory');
        Route::delete('/delete-category', 'Admin\MunicipalProfileController@deleteCategory');
        Route::put('/rename-category', 'Admin\MunicipalProfileController@renameCategory');
    });

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
