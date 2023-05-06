<?php
use App\Http\Controllers\cobaController;
use App\Http\Controllers\pegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sessionController;
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

Route::get('/session/create', 'SessionController@create');

Route::get('/session/show', 'SessionController@show');

Route::get('/session/delete', 'SessionController@delete');

Route::get('/pegawai/{NANIA}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

Route::get('/cobaerror/{nama?}', 'cobaController@index');