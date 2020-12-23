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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	echo "index page";
});


Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'logoutController@index');

Route::group(['middleware' => ['sess']], function () {

	Route::get('/home', 'homeController@index')->name('home.index');
	Route::get('/employee_home', 'employee_homeController@index')->name('employee_home.index');
	//Route::get('/admin/user/stdlist', 'homeController@stdlist')->name('home.stdlist');
	Route::get('/employeelist', ['uses' => 'homeController@employeelist', 'as' => 'home.employeelist']);
	Route::get('/joblist', ['uses' => 'employee_homeController@joblist', 'as' => 'employee_home.joblist']);
	Route::get('/details/{id}', 'homeController@show')->name('home.show');

	//Route::group(['middleware' => ['type']], function () {
	Route::get('/create', 'homeController@create')->name('home.create');
	Route::post('/create', 'homeController@store');
	Route::get('/edit/{id}', 'homeController@edit')->name('home.edit');
	Route::post('/edit/{id}', 'homeController@update');
	Route::get('/delete/{id}', 'homeController@delete');
	Route::post('/delete/{id}', 'homeController@destroy');


	Route::get('/employee_create', 'employee_homeController@create')->name('employee_home.create');
	Route::post('/employee_create', 'employee_homeController@store');
	Route::get('/employee_edit/{id}', 'employee_homeController@edit')->name('employee_home.edit');
	Route::post('/employee_edit/{id}', 'employee_homeController@update');
	Route::get('/employee_delete/{id}', 'employee_homeController@delete');
	Route::post('/employee_delete/{id}', 'employee_homeController@destroy');
	//});
});

//Route::resource('/product', 'ProductController');
Route::resource('/student', 'StudentController');
