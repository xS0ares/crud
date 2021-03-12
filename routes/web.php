<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;

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

//https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');


Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');

Route::post('/produto/create', [ProdutoController::class, 'store'])->name('produto.store');


Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');


