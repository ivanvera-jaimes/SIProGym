@extends('NuevoLayout')
@section('Content')
    <div class="container">
        <h2 class="text-center ">
            Desarrolladores
        </h2>
        <br>
        <div class="card-deck">
            <div class="card">
                <img src="{{ asset('img/Ivan.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jaider Ivan Vera Jaimes</h5>
                    <p class="card-text">Codigo: 1005012252</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('img/Diana.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Diana Alejandra Barrera Wilches</h5>
                    <p class="card-text">Codigo: 1001327428</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('img/German.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">German Daniel Rodriguez Lopez</h5>
                    <p class="card-text">Codigo: 1004842293</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
@endsection
