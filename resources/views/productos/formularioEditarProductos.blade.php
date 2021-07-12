@extends('layouts.admin')
@section('title', 'Productos')
@section('titulo-principal', 'Administracion productos')
@section('botones')
    <div style="text-align: center">
        <div class="col">
        <a href="{{ route('productos.index') }}" class="btn btn-primary">Crear</a>
    </div>
    </div>
@endsection

@section('Contenido')
<div class="container">
        <h3 class="text-center text-success mt-3">
            Actualizacion de informacion de un producto
        </h3>
        <div>
            <form action="{{ route('productos.update',['producto' => $producto->id]) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}">
                </div>
                <div class="form-group">
                    <label for="descri">descripcion</label>
                    <input type="text" class="form-control" id="descri" name="descri" value="{{ $producto->descripcion }}">
                </div>
                <div class="form-group">
                    <label for="valor">valor</label>
                    <input type="number" class="form-control" id="valor" name="valor" value="{{ $producto->valor }}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection