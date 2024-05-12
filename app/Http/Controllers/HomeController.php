<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $listas = Lista::where('id_usuario', auth()->user()->id)
            ->with('produtos')
            ->get();

        return view('dashboard', compact('listas'));
    }
}
