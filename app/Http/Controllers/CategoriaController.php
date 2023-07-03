<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::paginate(8);
        return view('index', ['categorias' => $categorias]);
    }

    public function admin()
{
    $categorias = Categoria::paginate(8);
    return view('admin.categorias', ['categorias' => $categorias]);
}

public function edit()
{
    $categorias = Categoria::paginate(6);
    return view('admin.edit-categoria', ['categorias' => $categorias]);
}

public function agre()
{
    $categorias = Categoria::paginate(6);
    return view('admin.agre-categoria', ['categorias' => $categorias]);
}
    public function show(Categoria $categoria)
    {
    }
}
