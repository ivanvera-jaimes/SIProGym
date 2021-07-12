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

@section('Contenido')
<div class="container ">
    <h2 class="text-center ">
        Formulario de inscripcion miembros
    </h2>
    <div >
        <form action="{{route('personas.store')}}" class="font-weight-bold" method="POST">
            @csrf
            <div class="class row">
                <div class="col-m2 offset-md-5">
                    <img id="imagen" src="{{asset("Source/Default.jpg")}}" alt="" width="200px" height="200px">
                    <input type="file" id="input_imagen" style="display: none;"> 
                </div>
                <textarea name="foto" id="input_base64" col="80" rows="10" style="display: none;"></textarea>
            </div>
            <div class="col-md-4">
                <label for="tipo_documento">Tipo de Documento</label>
                <select id="tipo_documento" class="form-control" name="tipo_documento" required>
                    <option value="">Seleccione su tipo de documento</option>
                    <option value="Cedula">Cedula de Ciudadania</option>
                    <option value="visa">Visa</option>
                    <option value="pasaporte">Pasaporte</option>
                </select>
                </div>
                <div class=" col-md-6">
                <label for="id">Número de identificación</label>
                <input name="id" type="number" class="form-control" placeholder="Ej. 1004842293" id="codigo">
                </div>
            <div class="form-group col-md-5 ">
                <label for="nombre">Nombres</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group col-md-5 ">
                <label for="apellido">Apellidos</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="form-group col-md-5 ">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad">
            </div>
            <div class="form-group col-md-5 ">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group col-md-5 ">
                <label for="altura">Altura</label>
                <input type="double" class="form-control" id="altura" name="altura">
            </div>
            <div class="form-group col-md-5 ">
                <label for="peso">Peso</label>
                <input type="number" class="form-control" id="email" name="peso">
            </div>
            <div class="form-group col-md-5">
                <label for="plan_id">Plan</label>
                <select name="plan_id" id="plan_id" class="form-control">
                    <option value="0">--Seleccione--</option>
                    @foreach($planes as $plan)
                    <option value="{{ $plan->id }}">{{ $plan->nombre }}</option>
                    @endforeach
                </select>
            </div>
        <button type="submit" class=" form-group text-light bg-dark">Crear</button>
        </form>
    </div>
</div>
<script>
    var imagen = document.getElementById('imagen');
    var input_imagen = document.getElementById('input_imagen');
    imagen.addEventListener('click',function(){
        input_imagen.click();
    });
    input_imagen.addEventListener('change',function(){
        var file = this.files[0];
        var sizebyte = this.files[0].size;
        var sizekilobyte = parseInt(sizebyte / 1024);
        if (sizekilobyte > 4096) {
            alert('La imagen excede el tamaño permitido de 4 MB');
        } else {
            var reader = new FileReader();
            reader.onloadend = function() {
                document.getElementById('input_base64').value=reader.result;
                document.getElementById("imagen").src = reader.result;
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection