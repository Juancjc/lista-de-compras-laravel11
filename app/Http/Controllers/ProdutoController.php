<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function destroy($id, $idLista)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->route('lista.edit', ['id' => $idLista]);

    }
}
