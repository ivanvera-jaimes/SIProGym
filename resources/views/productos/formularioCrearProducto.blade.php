@extends('layouts.admin')
@section('title', 'Productos')
@section('titulo-principal', 'Administracion productos')
@section('botones')
    <div style="text-align: center">
        <div class="col">
        </div>
    </div>
@endsection

@section('Contenido')
<div class="container ">
        <h2 class="text-center ">
            Formulario de creacion de productos
        </h2>
        <div >
            <form action="{{route('productos.store')}}" class="font-weight-bold" method="POST">
                @csrf
                <div class="class row">
                    <div class="col-m2 offset-md-5">
                        <img id="imagen" src="{{asset("Source/Default.jpg")}}" alt="" width="200px" height="200px">
                        <input type="file" id="input_imagen" style="display: none;"> 
                    </div>
                    <textarea name="foto" id="input_base64" col="80" rows="10" style="display: none;"></textarea>
                </div>
                <div class="form-group col-md-5 ">
                    <label for="nombre">Nombres</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group col-md-5 ">
                    <label for="descri">Descripcion</label>
                    <input type="text" class="form-control" id="descri" name="descri">
                </div>
                <div class="form-group col-md-5 ">
                    <label for="valor">Valor</label>
                    <input type="number" class="form-control" id="valor" name="valor">
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