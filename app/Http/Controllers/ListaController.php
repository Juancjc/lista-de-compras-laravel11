<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaRequest;
use App\Models\Lista;

class ListaController extends Controller
{
    public function index()
    {
        return Lista::all();
    }

    public function store(ListaRequest $request)
    {
        return Lista::create($request->validated());
    }

    public function show(Lista $lista)
    {
        return $lista;
    }

    public function update(ListaRequest $request, Lista $lista)
    {
        $lista->update($request->validated());

        return $lista;
    }

    public function destroy(Lista $lista)
    {
        $lista->delete();

        return response()->json();
    }
}
