@extends('plantilla.dashboard')

@section('content')

<div class="container">
    <h1>Formulario para crear un nuevo registro</h1>

    <form action="{{ route('keyboards.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                <label for="">Imagen: </label>
                <input type="file" name="image" id="" accept="image/*" required>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" id="" placeholder="Marca" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" id="" placeholder="Modelo" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo de KeyCap: </label>
                <input class="form-control" type="text" name="keycap" id="" placeholder="Tipo de Keycap" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamanio: </label>
                <input class="form-control" type="text" name="form" id="" placeholder="Tamanio" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo: </label>
                <input class="form-control" type="text" name="type" id="" placeholder="Tipo" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Anio: </label>
                <input class="form-control" type="number" name="year" id="" placeholder="Anio" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cantidad de teclas: </label>
                <input class="form-control" type="text" name="ckey" id="" placeholder="Cantidad de teclas" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">RGB: </label>
            <input class="form-control" type="text" name="rgb" id="" placeholder="RGB" required>
        </div>
        <div>
            <br>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
        </div>
        <div>
            <br>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" id="" placeholder="comment">
        </div>
</div>
<br>
<di class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input class="btn btn-info" type="reset" value="Restablecer">
    <input class="btn btn-primary" type="submit" value="Guardar">
    </div>

    </form>

    </div>

    @endsection