<?php
use App\Http\Controllers\frontendController;
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

Route::get('/', function () {
    return view('layout/dashboard');
});

Route::get('header', function () {
    return view('layout/header');
});

Route::get('sidebar', function () {
    return view('layout/sidebar');
});

Route::get('footer', function () {
    return view('layout/footer');
});

Route::get('User', 'App\Http\Controllers\UsersController@index');
Route::post('UserStore', 'App\Http\Controllers\UsersController@store');
Route::post('UserUpdate', 'App\Http\Controllers\UsersController@update');
Route::get('UserDestroy{id}', 'App\Http\Controllers\UsersController@destroy');

Route::get('Peneliti', 'App\Http\Controllers\PenelitiController@index');
Route::post('PenelitiStore', 'App\Http\Controllers\PenelitiController@store');
Route::post('PenelitiUpdate', 'App\Http\Controllers\PenelitiController@update');

Route::get('Fakultas', 'App\Http\Controllers\FakultasController@index');
Route::post('FakultasStore', 'App\Http\Controllers\FakultasController@store');
Route::post('FakultasUpdate', 'App\Http\Controllers\FakultasController@update');
Route::get('FakultasDestroy{id}', 'App\Http\Controllers\FakultasController@destroy');

Route::get('Pendanaan', 'App\Http\Controllers\PendanaanController@index');
Route::post('PendanaanStore', 'App\Http\Controllers\PendanaanController@store');
Route::post('PendanaanUpdate', 'App\Http\Controllers\PendanaanController@update');

Route::get('Luaranwajib', 'App\Http\Controllers\LuaranwajibController@index');
Route::post('LuaranwajibStore', 'App\Http\Controllers\LuaranwajibController@store');
Route::post('LuaranwajibUpdate', 'App\Http\Controllers\LuaranwajibController@update');

Route::get('Luarantambahan', 'App\Http\Controllers\LuarantambahanController@index');
Route::post('LuarantambahanStore', 'App\Http\Controllers\LuarantambahanController@store');
Route::post('LuarantambahanUpdate', 'App\Http\Controllers\LuarantambahanController@update');

Route::get('Penelitian', 'App\Http\Controllers\PenelitianController@index');
Route::post('penelitianStore', 'App\Http\Controllers\PenelitianController@store');
Route::post('penelitianEdit/{id}', 'App\Http\Controllers\PenelitianController@edit');

Route::get('/login', 'App\Http\Controllers\loginController@index');
Route::post('/login/cek', 'App\Http\Controllers\loginController@cek');
Route::get('/keluar', 'App\Http\Controllers\loginController@logout');

// frontend Controller //

Route::get('/LPPM', function() {
    return view('Frontend/index');
});

Route::get('/print', 'App\Http\Controllers\frontendController@pdf');
