<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\auth;
use App\Http\Controllers\BeritaController;


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
Route::get('/', 'BeritaController@index')->name('berita.index');

// Rute untuk mengakses daftar berita atau project
Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/project', 'ProjectController@index')->name('project.index');

// Rute untuk menambah berita atau project
Route::get('/berita/create', 'BeritaController@create')->name('berita.create');
Route::post('/berita', 'BeritaController@store')->name('berita.store');
Route::get('/project/create', 'ProjectController@create')->name('project.create');
Route::post('/project', 'ProjectController@store')->name('project.store');

// Rute untuk mengedit berita atau project
Route::get('/berita/{id}/edit', 'BeritaController@edit')->name('berita.edit');
Route::put('/berita/{id}', 'BeritaController@update')->name('berita.update');
Route::get('/project/{id}/edit', 'ProjectController@edit')->name('project.edit');
Route::put('/project/{id}', 'ProjectController@update')->name('project.update');

// Rute untuk menghapus berita atau project
Route::delete('/berita/{id}', 'BeritaController@destroy')->name('berita.destroy');
Route::delete('/project/{id}', 'ProjectController@destroy')->name('project.destroy');
