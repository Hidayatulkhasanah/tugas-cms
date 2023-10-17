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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

// Rute untuk mengakses daftar berita atau project
Route::get('/project', 'ProjectController@index')->name('project.index');

// Rute untuk menambah berita atau project
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::put('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::get('/berita/{id}/delete', [BeritaController::class, 'delete'])->name('berita.delete');
Route::get('/project/create', 'ProjectController@create')->name('project.create');
Route::post('/project', 'ProjectController@store')->name('project.store');

// Rute untuk mengedit berita atau project
Route::get('/project/{id}/edit', 'ProjectController@edit')->name('project.edit');
Route::put('/project/{id}', 'ProjectController@update')->name('project.update');

// Rute untuk menghapus berita atau project
Route::delete('/project/{id}', 'ProjectController@destroy')->name('project.destroy');

Auth::routes();
