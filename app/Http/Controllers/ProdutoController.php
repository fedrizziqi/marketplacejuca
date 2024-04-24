<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function cadastroProduto(){
        return view('produto.cadastro');
    }

    public function cadastrarProduto(Request $request){
        return $request->all();
    }
}
