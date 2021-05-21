@extends('plantilla.dashboard')

@section('content')

<div class="container">
    <h1>Formulario para crear un nuevo registro</h1>

    <form action="{{ route('chairs.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                <label for="">Imagen: </label>
                <input type="file" name="image" id="" accept="image/*" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" id="" placeholder="Marca" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" id="" placeholder="Modelo" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" id="" placeholder="Color" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Peso Soportado: </label>
                <input class="form-control" type="number" name="weight" id="" placeholder="Peso Soportado" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Respaldo: </label>
                <input class="form-control" type="text" name="fixed" id="" placeholder="Respaldo" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Anio: </label>
                <input class="form-control" type="number" name="year" id="" placeholder="Anio" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Material: </label>
                <input class="form-control" type="text" name="material" id="" placeholder="Material" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Rgb: </label>
            <input class="form-control" type="text" name="rgb" id="" placeholder="Rgb" required>
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