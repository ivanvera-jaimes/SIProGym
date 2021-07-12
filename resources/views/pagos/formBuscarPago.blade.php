@extends('layouts.admin')
@section('title','Pagos')
@section('titulo-principal','Buscar pagos')
@section('botones')
<div style="text-align: center">
    <div class="col">
        <a href="{{ route('personas.index') }}" class="btn btn-primary">Listado de miembros</a>
    </div>
</div>
@endsection
@section('Contenido')
<div class="container">
        <div>
            <form action="{{route('pagos.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_pago">Ingrese el Numero de documento del miembro</label>
                    <input type="number" class="form-control" id="id_pago" name="id_pago">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
@endsection