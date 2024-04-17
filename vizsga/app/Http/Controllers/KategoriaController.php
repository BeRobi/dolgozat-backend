<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index()
    {
        $kategoriak = response()->json(Kategoria::with('teszt')->get());
        return $kategoriak;
    }

    public function show($id)
    {
        return Kategoria::find($id);
    }

    public function postKategoria(Request $request)
    {
        $kategoria = new Kategoria();
        $kategoria->kategoriaId = $request->kategoriaId;
        $kategoria->kategorianev = $request->kategorianev;
        $kategoria->save();
        return response()->json($kategoria);
    }
}
