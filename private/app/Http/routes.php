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

Route::get('/', function () {
    return view('welcome');
});

Route::get('profil/sekolah', function () {
    return view('profil.sekolah');
});

Route::get('profil/visi-misi', function () {
    return view('profil.visi-misi');
});

Route::get('profil/jurusan', function () {
    return view('profil.jurusan');
});

Route::get('404', function () {
    return view('errors.404');
});

Route::get('500', function () {
    return view('errors.500');
});

/* Middleware default "WEB* : memeriksa session CSRF, kernel HTTP, dll */
Route::group(['middleware' => 'web'], function(){
	//redirect ke halaman login
	Route::auth();
	// return view('/login');
});

/* URL ini hanya bisa diakses oleh user yang sudah login */
Route::group(['middleware' => ['web', 'auth']], function(){
	//redirect ke halaman login
	Route::get('home', 'HomeController@index');
	Route::get('/', function(){
		if(Auth::user()->level == 1)
		{
			return view('admin_home');
		}
		else 
		{
			return view('user_home');
		}
	});
});


// Route::get('/home', 'HomeController@index');
