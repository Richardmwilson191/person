<?php

use App\Http\Controllers\PersonController;
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
    return view('welcome');
});

Route::get('person', [PersonController::class, 'index'])->name('person');
Route::post('person/add', [PersonController::class, 'store'])->name('person.store');
Route::get('person/{id}/edit', [PersonController::class, 'edit'])->name('person.edit');
Route::post('person/{id}/update', [PersonController::class, 'update'])->name('person.update');
Route::post('person/{id}/delete', [PersonController::class, 'delete'])->name('person.delete');
Route::get('person/{id}/show', [PersonController::class, 'show'])->name('person.show');
