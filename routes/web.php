<?php

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('addnewprogram', [App\Http\Controllers\DegreeProgramController::class, 'create'])->name('addnewprogram');
Route::post('addnewprogrampost', [\App\Http\Controllers\DegreeProgramController::class,'store'])->name('addnewprogrampost');
Route::get('degreeprogramindex', [App\Http\Controllers\DegreeProgramController::class, 'index'])->name('degreeprogramindex');
Route::get('/updatedegreeprogram/{id}',[\App\Http\Controllers\DegreeProgramController::class, 'update'])->name('updatedegreeprogram');
Route::post('/addnewprogrampost_update/{id}',[\App\Http\Controllers\DegreeProgramController::class, 'addnewprogrampost_update'])->name('addnewprogrampost_update');

