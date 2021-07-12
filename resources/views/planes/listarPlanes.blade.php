@extends('layouts.admin')
@section('title', 'Planes')
@section('titulo-principal', 'Administracion planes')
@section('botones')
    <div style="text-align: center">
        <div class="col">
            <a href="{{ route('planes.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>
@endsection

@section('Contenido')
    <div class="container">
        <h2 class="text-center ">
            Listado de planes
        </h2>
        <table class=" table table-bordered text-white bg-dark text-center font-weight-bold">
            <thead>
                <tr>
                    <td class="text-center">ID</td>
                    <td class="text-center">Nombre</td>
                    <td class="text-center">Valor</td>
                    <td class="text-center">Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($planes as $plan)
                    <tr>
                        <td>{{ $plan->id }}</td>
                        <td>{{ $plan->nombre }}</td>
                        <td>{{ $plan->valor }}</td>

                        <td>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-warning btn-md" data-toggle="modal">
                                        <a href="{{ route('planes.edit', ['id' => $plan->id]) }}" class="fa fa-pencil"></a>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal">
                                        <a href="{{ route('planes.delete', ['id' => $plan->id]) }}"
                                            class="fa fa-window-close" aria-hidden="true"></a>
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
