@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/teclado.jpg')}}" class="d-block w-100" alt="..." height="600" width="1200">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido "{{ Auth::user()->name }} " a nuestra a  pagina "MaxhorGamerPC"</h5>
                    <p>Encontras productos de calidad y precio</p>
                    <a href="/public" class="btn btn-dark">Clic Aqui !</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('img/3090.jpg')}}" class="d-block w-100" alt="..." height="600" width="1200">
                <div class="carousel-caption d-none d-md-block">
                    <h5>;)</h5>
                    <p>¿Que esperas?</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="{{asset('img/gaming.jpg')}}" class="d-block w-100" alt="..." height="600" width="1200">
            <div class="carousel-caption d-none d-md-block">
                <h5>Gaming</h5>
                <p>Aqui puedes encontrar todo lo del mundo gaming</p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    </div>
</div>

@endsection
