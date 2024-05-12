<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaRequest;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Lista;

class ListaController extends Controller
{
    public function index()
    {
        return Lista::all();
    }

    public function create(ListaRequest $request)
    {
        return view('lista.form');
    }

    public function store(Request $request)
    {

        $lista = Lista::create($request->all());
        $lista->save();

        $produtosData = json_decode($request->get('produtos'));

        foreach ($produtosData as $produto) {
            $this->adicionarProduto($produto, $lista->id_lista);
        }


        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $lista = Lista::find($id);
        $produtos = Produto::where('id_lista', $id)->get();
        return view('lista.form', compact('lista', 'produtos'));
    }

    public function update(Request $request, $id)
    {
        $lista = Lista::find($id);
        $lista->update(request()->all());
        $produtosData = json_decode($request->get('produtos'));

        foreach ($produtosData as $produto) {
            $this->adicionarProduto($produto, $lista->id_lista);
        }

        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $lista = Lista::find($id);
        $lista->delete();

        return redirect()->route('dashboard');
    }

    public function show(Lista $lista)
    {
        return $lista;
    }

    private function adicionarProduto($produtoData, $listaId)
    {
        if(empty($produtoData->nome) && empty($produtoData->descricao) &&  empty($produtoData->quantidade)) {
            return;
        }
        $produto = new Produto;
        $produto->nome = $produtoData->nome;
        $produto->descricao = $produtoData->descricao;
        $produto->quantidade = $produtoData->quantidade;
        $produto->id_lista = $listaId;
        $produto->save();
    }

}
