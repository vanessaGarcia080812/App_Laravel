<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function create()
    {
        return view("producto.create");
    }

    public function store(Request $request)
    {
        $validados = $request->validate([
            'nombre' => 'required|string|min:5|max:30',
            'descripcion' => 'required|string|min:10|max:255',
            'presentacion' => 'required|string|min:5|max:30',
            'pais_origen' => 'required|string|min:5|max:30',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto = Producto::create([
            'nombre' => $validados['nombre'],
            'descripcion' => $validados['descripcion'],
            'presentacion' => $validados['presentacion'],
            'pais_origen' => $validados['pais_origen'],
            'precio' => $validados['precio'],
            'stock' => $validados['stock'],
        ]);

        return redirect()->back()->with('success', 'Producto guardado correctamente');
    }

    public function index()
    {
        $productos = Producto::all();
        return view('producto.index', ['productos' => $productos]);
    }
}
