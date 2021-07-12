@extends('layouts.admin')
@section('title', 'Editar miembro')
@section('titulo-principal', 'Administracion miembros')
@section('botones')
    <div style="text-align: center">
        <div class="col">
            <a href="{{ route('personas.index') }}" class="btn btn-success">Regresar al listado</a>
        </div>
    </div>
@endsection
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLte/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="AdminLte/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLte/css/adminlte.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Acceso</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link text-danger" data-slide="true" href="#">Salir&nbsp;<i
                            class="fa fa-sign-out"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        @include('Layouts.Menu')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('titulo-principal')</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> @yield('titulo-secundario')
                            @yield('Botones')
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- @yield('Contenido') --}}
                            @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('apellido')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <form action="{{ route('personas.update', ['persona' => $persona->id]) }}" method="POST">
        {{ method_field('PUT') }}
        @csrf
        <div class="class row">
            <div class="col-m2 offset-md-5">
                <img id="imagen" src="{{ asset('Source/Default.jpg') }}" alt="" width="200px" height="200px">
                <input type="file" id="input_imagen" style="display: none;">
            </div>
            <textarea name="foto" id="input_base64" col="80" rows="10" style="display: none;"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="tipo_documento">Tipo de identificación</label>
                <input name="tipo_documento" type="text" class="form-control" id="tipo_documento"
                    value="{{ $persona->tipo_documento }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="id">Número de identificación</label>
                <input name="id" type="number" class="form-control" id="id" value="{{ $persona->id }}">
            </div>
        </div>
        <div class="form-group">
            <label for="nombre">Nombres</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $persona->nombre }}">
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $persona->apellido }}">
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" value="{{ $persona->edad }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $persona->email }}">
        </div>
        <div class="form-group">
            <label for="altura">Altura</label>
            <input type="double" class="form-control" id="altura" name="altura" value="{{ $persona->altura }}">
        </div>
        <div class="form-group">
            <label for="peso">Peso</label>
            <input type="number" class="form-control" id="peso" name="peso" value="{{ $persona->peso }}">
        </div>
        <div class="form-group">
            <label for="plan_id">Plan</label>
            <select name="plan_id" id="plan_id" class="form-control">
                <option value="0">--Seleccione--</option>
                @foreach ($planes as $plan)
                    @if ($persona->plan_id == $plan->id)
                        <option value="{{ $plan->id }}" selected="">{{ $plan->nombre }}</option>
                    @else
                        <option value="{{ $plan->id }}">{{ $plan->nombre }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    <script>
        var imagen = document.getElementById('imagen');
        var input_imagen = document.getElementById('input_imagen');
        imagen.addEventListener('click', function() {
            input_imagen.click();
        });
        input_imagen.addEventListener('change', function() {
            var file = this.files[0];
            var sizebyte = this.files[0].size;
            var sizekilobyte = parseInt(sizebyte / 1024);
            if (sizekilobyte > 4096) {
                alert('La imagen excede el tamaño permitido de 4 MB');
            } else {
                var reader = new FileReader();
                reader.onloadend = function() {
                    document.getElementById('input_base64').value = reader.result;
                    document.getElementById("imagen").src = reader.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <footer class="main-footer" style="text-align: center">
        <strong>Realizado por: Jaider Ivan Vera Jaimes, Diana Alejandra Barrera y German Rodriguez</strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>JIVJ</b>
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="AdminLte/js/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="AdminLte/js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="AdminLte/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="AdminLte/js/adminlte.js"></script>
</body>

</html>


@section('Contenido')
    
@endsection