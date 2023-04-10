<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::get('/perfil', [App\Http\Controllers\ViewController::class, 'showPerfil']);

//USER
Route::post('users/{userId}/roles/{roleId}', 'UserController@assignRole')->name('users.assignRole');
Route::get('users', 'UserController@index')->name('users.index');
Route::get('users/create', 'UserController@create')->name('users.create');
Route::post('users', 'UserController@store')->name('users.store');
Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::put('users/{id}', 'UserController@update')->name('users.update');
Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');

//INSTRUMENTOS
Route::get('/agregarInstrumento', [App\Http\Controllers\InstrumentoController::class, 'showInstrumentoAgregar']);
Route::post('/agregarInstrumento', [App\Http\Controllers\InstrumentoController::class, 'store'])->name('instrumento.store');
Route::get('/splitInstrumento', [App\Http\Controllers\InstrumentoController::class, 'showInstrumentoSplit']);