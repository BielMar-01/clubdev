<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

//    public function produtosIndex()
//    {
//        $produtos = Produtos::all();
//        return view('produtos',[
//            'produtos' => $produtos
//        ]);
//    }

    public function produtosDashboard()
    {
        $produtos = Produtos::all();
        return view('produtos-dashboard',[
            'produtos' => $produtos,
        ]);
    }

    public function create(Request $request)
    {
        $produtos = new Produtos();
        $produtos->nome  = $request->nome;
        $produtos->preco = $request->preco;
        $produtos->desc  = $request->desc;
        $produtos->save();
        return $this->produtosDashboard();
    }

    public function edit(Request $request)
    {
        $produtos = Produtos::find($request->id);
        $produtos->nome  = $request->nome;
        $produtos->preco = $request->preco;
        $produtos->desc  = $request->desc;
        $produtos->save();
        return $this->produtosDashboard();
    }

    public function delete(Request $request)
    {
        Produtos::where('id',$request->id)->delete();
        return $this->produtosDashboard();
    }
}
