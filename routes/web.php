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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

/*
    |--------------------------------------------------------------------------
    | Pessoas
    |--------------------------------------------------------------------------
    */
$prefix = 'pessoas';
$controller = 'PessoasController';

Route::group(['prefix' => $prefix, 'as' => $prefix . '.'], function () use ($controller) {
    Route::get('/',          [App\Http\Controllers\PessoasController::class, 'index'])->name('pessoas.index');
    Route::get('/create',    [App\Http\Controllers\PessoasController::class, 'create'])->name('pessoas.create');
    Route::post('/',         [App\Http\Controllers\PessoasController::class, 'store'])->name('pessoas.store');
    Route::get('/{id}/edit', [App\Http\Controllers\PessoasController::class, 'edit'])->name('pessoas.edit');
    Route::put('/{id}',      [App\Http\Controllers\PessoasController::class, 'update'])->name('pessoas.update');
    Route::delete('/{id}',   [App\Http\Controllers\PessoasController::class, 'destroy'])->name('pessoas.destroy');
});
