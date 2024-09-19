<?php

namespace App\Http\Controllers;

use App\Models\TipoEmpleado;
use Illuminate\Http\Request;

class TipoEmpleadoController extends Controller
{
    // Mostrar el formulario de crear
    public function create()
    {
        return view('tipoEmpleado.create_tipoempleado');
    }

    // Guardar el nuevo tipo de empleado
    public function store(Request $request)
    {
        $request->validate([
            'id_tipo_empleado' => 'required|string|max:10',
            'nombre_tipo_empleado' => 'nullable|string|max:50',
        ]);

        TipoEmpleado::create($request->all());

        return redirect()->back()->with('success', 'Tipo de empleado creado exitosamente');
    }

    // Mostrar la tabla de tipos de empleados
    public function index()
    {
        $tipoEmpleados = TipoEmpleado::all();
        return view('tipoEmpleado.index_tipoempleado', compact('tipoEmpleados'));
    }
}
