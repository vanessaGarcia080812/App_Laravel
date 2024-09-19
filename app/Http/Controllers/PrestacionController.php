<?php

namespace App\Http\Controllers;

use App\Models\Prestacion;
use Illuminate\Http\Request;

class PrestacionController extends Controller
{
    // Mostrar el formulario de crear
    public function create()
    {
        return view('prestaciones.create_prestacion');
    }

    // Guardar la nueva prestación
    public function store(Request $request)
    {
        $request->validate([
            'id_prestacion' => 'required|string|max:10',
            'nro_documento_empleado' => 'nullable|string|max:10',
            'tipo_prestacion' => 'nullable|string|max:50',
            'monto' => 'nullable|numeric',
            'fecha_pago' => 'nullable|date',
        ]);

        Prestacion::create($request->all());

        return redirect()->back()->with('success', 'Prestación creada exitosamente');
    }

    // Mostrar la tabla de prestaciones
    public function index()
    {
        $prestaciones = Prestacion::all();
        return view('prestaciones.index_prestaciones', compact('prestaciones'));
    }
}
