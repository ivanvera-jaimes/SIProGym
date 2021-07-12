@extends('layouts.admin')
@section('title', 'Editar miembro')
@section('titulo-principal', 'Administracion miembros')
@section('botones')
<div style="text-align: center">
    <div class="col">
        <a href="{{ route('personas.create') }}" class="btn btn-primary">Crear persona</a>
    </div>
</div>
@endsection
@section('Contenido')
        <div class="container">
            <h2 class="text-center ">
                Listado de Miembros
            </h2>
            <br>
            <table class="table table-bordered text-white bg-dark text-center  font-weight-bold">
                <thead>
                    <tr>
                        <td class="text-center">Num Id</td>
                        <td class="text-center">Foto</td>
                        <td class="text-center">Tipo doc</td>
                        <td class="text-center">Nombre</td>
                        <td class="text-center">Apellido</td>
                        <td class="text-center">Edad</td>
                        <td class="text-center">Email</td>
                        <td class="text-center">Altura</td>
                        <td class="text-center">Peso</td>
                        <td class="text-center">IMC</td>
                        <td class="text-center">Plan</td>
                        <td class="text-center">Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                    <tr>
                        <td>{{ $persona->id }}</td>
                        @if ($persona->foto)
                            <td><img src="{{$persona->foto}}" width="150px" height="150px"></td>
                        @else
                            <td></td>
                        @endif
                        <td>{{ $persona->tipo_documento}}</td>
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->apellido }}</td>
                        <td>{{ $persona->edad }}</td>
                        <td>{{ $persona->email }}</td>
                        <td>{{ $persona->altura }}</td>
                        <td>{{ $persona->peso }}</td>
                        <td>{{ $persona->imc }}</td>
                        <td>{{ $persona->plan->nombre }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-warning btn-md" data-toggle="modal">
                                        <a href="{{ route('personas.edit',['persona'=>$persona->id]) }}" class="fa fa-pencil"></a>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal">
                                        <a href="{{ route('personas.delete',['persona' => $persona->id]) }}" class="fa fa-window-close" aria-hidden="true"></a>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection