@extends('layouts.admin')
@section('title', 'Planes')
@section('titulo-principal', 'Administracion planes')
@section('botones')
<div style="text-align: center">
    <div class="col">
        <a href="{{ route('planes.index') }}" class="btn btn-primary">Regresar al listado de planes</a>
    </div>
</div>
@endsection
@section('Contenido')
    <div class="container">
        <h3 class="text-center text-success mt-3">
            Editar Plan
        </h3>
        <div>
            <form action="{{ route('planes.update',['id'=>$plan->id]) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $plan->nombre }}">
                </div>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number" class="form-control" id="valor" name="valor" value="{{ $plan->valor }}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection