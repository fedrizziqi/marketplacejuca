<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lst/reservas', function () {
});

Route::get('/lst/produtos', function () {
});

Route::get('/cad/produto', [ProdutoController::class, 'cadastroProduto']);

Route::post('/cad/produto', [ProdutoController::class, 'cadastrarProduto'])->name('prod.cadastrar');

Route::get('/cad/disponibilidadeProduto', function () {
});

Route::post('/cad/disponibilidadeProduto', function () {
});











