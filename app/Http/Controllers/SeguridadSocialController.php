<?php

namespace App\Http\Controllers;

use App\Models\SeguridadSocial;
use Illuminate\Http\Request;

class SeguridadSocialController extends Controller
{
    // Mostrar el formulario de crear
    public function create()
    {
        return view('seguridadSocial.create_seguridadsocial');
    }

    // Guardar la nueva seguridad social
    public function store(Request $request)
    {
        $request->validate([
            'id_seguridad_social' => 'required|string|max:10',
            'nro_documento_empleado' => 'nullable|string|max:10',
            'nombre_seguridad_social' => 'nullable|string|max:50',
            'porcentaje_empleado' => 'nullable|numeric',
            'porcentaje_empleador' => 'nullable|numeric',
        ]);

        SeguridadSocial::create($request->all());

        return redirect()->back()->with('success', 'Seguridad social creada exitosamente');
    }

    // Mostrar la tabla de seguridad social
    public function index()
    {
        $seguridadsocial = SeguridadSocial::all();
        return view('seguridadSocial.index_seguridadsocial', compact('seguridadsocial'));
    }
}
