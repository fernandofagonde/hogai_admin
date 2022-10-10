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
    | Pessoa
    |--------------------------------------------------------------------------
    */
$prefix = 'pessoa';
$controller = 'PessoaController';

Route::group(['prefix' => $prefix, 'as' => $prefix . '.'], function () use ($controller) {
    Route::get('/',          [App\Http\Controllers\PessoaController::class, 'index'])->name('pessoa.index');
    Route::get('/create',    [App\Http\Controllers\PessoaController::class, 'create'])->name('pessoa.create');
    Route::post('/',         [App\Http\Controllers\PessoaController::class, 'store'])->name('pessoa.store');
    Route::get('/{id}/edit', [App\Http\Controllers\PessoaController::class, 'edit'])->name('pessoa.edit');
    Route::put('/{id}',      [App\Http\Controllers\PessoaController::class, 'update'])->name('pessoa.update');
    Route::delete('/{id}',   [App\Http\Controllers\PessoaController::class, 'destroy'])->name('pessoa.destroy');
});
