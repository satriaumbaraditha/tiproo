<?php

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

Route::get('/', function () {
    return view('berandauser');
});

// Route::resource('/User', 'UserController');

Route::get ('login', function(){

	return view('Login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::Resource('/Barang','BarangController');

Route::Resource('/Merk','MerkController');


Route::post('/login/custom', ['as' => 'login', 'uses'=>'LoginController@login', 
    'as' => 'login.custom'
]); 

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', function(){
        return view('home' );
    })->name('home');
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});