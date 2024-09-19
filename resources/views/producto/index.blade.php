<link rel="stylesheet" href="{{ asset('css/styles.css') }}">


@extends('layouts.app')

@section('table')
<div class="container">
    <h2>Producto</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id Producto</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Presentación</th>
                <th>País de Origen</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->presentacion}}</td>
                    <td>{{$producto->pais_origen}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td><a href="#">Actualizar</a></td>
                    <td><a href="#">Eliminar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
