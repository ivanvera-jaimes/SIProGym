@extends('layouts.admin')
@section('title','Pagos')
@section('titulo-principal','Buscar pagos')

@section('Contenido')
<div class="container">
        <h3 class="text-center text-success mt-3">
            Realizacion de Pago
        </h3>
        <div>
            <form action="{{ route('pagos.update', ['pago' => $pago->id]) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <div class="row">
                    <div class="col">
                        <h2 class="text-center text-warning">El pago de la persona {{ $persona->nombre }} es de {{$pago->costo}}  </h2>
                        <h4 class="text-center text-warning">
                            ¿Se realizara el pago ?
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('pagos.index') }}" class="btn btn-danger">Atras</a>
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success">Pagar</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection