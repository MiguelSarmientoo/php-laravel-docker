<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataCrudController;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/datacrud', [DataCrudController::class, 'index'])->name('datacrud.index');
Route::get('/datacrud/create', [DataCrudController::class, 'create'])->name('datacrud.create');
Route::post('/datacrud', [DataCrudController::class, 'store'])->name('datacrud.store');
Route::get('/datacrud/{id}', [DataCrudController::class, 'show'])->name('datacrud.show');
Route::get('/datacrud/{id}/edit', [DataCrudController::class, 'edit'])->name('datacrud.edit');
Route::put('/datacrud/{id}', [DataCrudController::class, 'update'])->name('datacrud.update');
Route::delete('/datacrud/{id}', [DataCrudController::class, 'destroy'])->name('datacrud.destroy');
