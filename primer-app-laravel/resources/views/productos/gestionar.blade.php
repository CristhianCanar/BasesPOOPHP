@extends('layouts.app')
@section('titulo', 'Gestionar productos')
@section('contenido')
    <h1>Gestionar los productos</h1>
    <a href="{{ route('producto.create') }}">Registrar producto</a>
    <table>
        <thead>
            <th>N°</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody>

        </tbody>
    </table>
@endsection
