<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/auth', function () {
    return view('auth.login');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::resource('course','CourseController');

Route::get('/about-us',function(){
	return view('');
});

// Route::get('layouts/login','Auth\AuthController@getLogin');
// Route::get('layouts/login','Auth\Controller@postLogin');
// Route::get('layouts/logout','Auth\AuthController@getLogout');

Route::get('/form_anak', function () {
    return view('layouts.form_calonanak');
});

Route::get('/tabel_calonanak', function () {
    return view('layouts.tabel_calonanak');
});

Route::get('/tabel_anakasuh', function () {
    return view('layouts.tabel_anakasuh');
});
Route::get('/tabel_donatur', function () {
    return view('layouts.tabel_donatur');
});

Route::get('/home', function () {
    return view('layouts.home');
});
