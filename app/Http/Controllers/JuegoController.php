<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Juego;

class JuegoController extends Controller
{
    public function store()
    {
    }


    public function create()
    {
        $categorias = Categoria::All();
        return view('admin.agre-juego', [
            'categorias' => $categorias
        ]);
    }


    public function index()
    {
        $juegos = Juego::paginate(8);
        return view('index', ['juegos' => $juegos]);
    }


    public function admin()
    {
        $juego = Juego::paginate(6);
        return view('admin.juegos', ['juegos' => $juego]);
    }

    public function edit(Request $request)
{   
    $juego = Juego::find($request->id);
    return view('admin.edit-juego', ['juego' => $juego]);
}


    public function update(Request $request, $id)
    {    
        $juego = Juego::findOrFail($id);
            $request->validate([
                'nombre' => 'required|max:255',
                'precio' => ['required|min:0|max:30000'],
                'descripcion' => ['required', 'max:255']
            ]);

            $juego->nombre = $request['nombre'];
            $juego->precio = $request['precio'];
            $juego->descripcion = $request['descripcion']; 

        return redirect()
            ->route('admin.juegos')
            ->with('status', 'El juego se ha modificado correctamente.');
    }


    public function destroy(Juego $juego)
    {
        // Realiza la lógica de eliminación del juego
        // Puedes utilizar el método delete() en el modelo Juego
        $juego->delete();

        // Redirecciona a la vista de administración de juegos
        return redirect()->route('admin.juegos')->with('success', 'Juego eliminado exitosamente');
    }

    public function agre()
    {
        $juegos = Juego::paginate(6);
        return view('admin.agre-juego', ['juegos' => $juegos]);
    }


    public function show(Juego $juegos)
    {
    }
}

/*    public function index()
{
    $Juego = Producto::all();
    return view('index', compact('Juego'));
}*/
