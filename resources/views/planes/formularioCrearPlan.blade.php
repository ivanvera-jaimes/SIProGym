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
        <h2 class="text-center ">
            Plan de gimnasio
        </h2>
    <div>
        <form action="{{ route('planes.store') }}"  class="  font-weight-bold" method="POST">
                @csrf
                <div class="form-group col-md-5">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group col-md-5">
                    <label for="valor">Valor</label>
                    <input type="number" class="form-control" id="valor" name="valor">
                </div>
                <button type="submit" class="btn text-light bg-dark " id="crear" > <h2>Crear</h2></button>
            </form>
        </div>
    </div>
@endsection