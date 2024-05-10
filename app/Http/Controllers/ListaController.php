<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaRequest;
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
        return redirect()->route('dashboard');
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
