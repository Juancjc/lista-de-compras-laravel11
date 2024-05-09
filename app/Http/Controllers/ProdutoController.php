<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function store(ProdutoRequest $request)
    {
        return Produto::create($request->validated());
    }

    public function show(Produto $produto)
    {
        return $produto;
    }

    public function update(ProdutoRequest $request, Produto $produto)
    {
        $produto->update($request->validated());

        return $produto;
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return response()->json();
    }
}
