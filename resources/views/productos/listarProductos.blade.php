@extends('layouts.admin')
@section('title', 'Productos')
@section('titulo-principal', 'Administracion productos')
@section('botones')
    <div style="text-align: center">
        <div class="col">
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Crear</a>
    </div>
    </div>
@endsection

@section('Contenido')
<div class="container">
            <h2 class="text-center ">
                Listado de Productos
            </h2>
            <br>
            <table class="table table-bordered text-white bg-dark text-center  font-weight-bold">
                <thead>
                    <tr>
                        <td class="text-center">ID</td>
                        <td class="text-center">Foto</td>
                        <td class="text-center">Nombre</td>
                        <td class="text-center">Descripcion</td>
                        <td class="text-center">Valor</td>
                        <td class="text-center">Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        @if ($producto->foto)
                            <td><img src="{{$producto->foto}}" width="150px" height="150px"></td>
                        @else
                            <td></td>
                        @endif
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->valor }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-warning btn-md" data-toggle="modal">
                                        <a href="{{ route('productos.edit',['producto'=>$producto->id]) }}" class="fa fa-pencil"></a>
                                    </button> &nbsp;
                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal">
                                        <a href="{{ route('productos.delete',['producto' => $producto->id]) }}" class="fa fa-window-close" aria-hidden="true"></a>
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
