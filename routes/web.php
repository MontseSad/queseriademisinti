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
    return view('welcome');
});

/**
 * Login
 */
Route::get('admins/login','AdministratorsController@loginForm')->name('admins.login');
Route::post('admins/login','AdministratorsController@loginAdmin')->name('admin.auth.loginAdmin');
Route::post('logout','AdministratorsController@logout')->name('logout');
Route::get('login', [ 'as' => 'login', 'uses' => view('welcome') ]);
/**
 * Admin routes
 */
Route::get('/home', 'InsumoController@index')->name('home');
//Queseros
Route::get('Queseros', 'HomeController@queseros_list')->name('list.queseros');
Route::post('admin/storequesero','HomeController@storequesero')->name('admin.storequesero');
Route::get('Queseros/create', 'HomeController@createQuesero')->name('queseros.create');
Route::get('Queseros/{quesero}', 'HomeController@quesero_show')->name('queseros.show');
Route::put('Queseros/{quesero}', 'HomeController@quesero_update')->name('queseros.update');
Route::delete('Queseros/{quesero}', 'HomeController@quesero_destroy')->name('queseros.destroy');
Route::get('Queseros/{quesero}/edit', 'HomeController@quesero_edit')->name('queseros.edit');
//Productos
Route::resource('productos', 'ProductoController');
//Insumos
Route::resource('insumos','InsumoController');

//Route::get('/lotes', 'HomeController@lotes')->name('lotes');
//Route::get('/adduser', 'HomeController@adduser')->name('adduser');
//Route::get('/ventas', 'HomeController@lotes')->name('ventas');
//Route::get('/compras', 'HomeController@lotes')->name('compras');

/**
 * Queseros routes
 */
//Route::get('queseros/login','QueseroController@loginForm')->name('quesero.login');
Route::get('queseros/login','AuthQueseroController@loginForm')->name('quesero.login');
Route::post('queseros/login','AuthQueseroController@loginQueso')->name('quesero.auth.loginQuesero');
//Route::get('Quesero', 'QueseroController@index')->name('Quesero');
Route::resource('Quesero', 'QueseroController');