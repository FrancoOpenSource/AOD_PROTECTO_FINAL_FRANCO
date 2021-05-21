@extends('plantilla.dashboard')


@section('content')

<div class="container">
    <h1>Actualizar datos de teclados <b>{{ $chair->brand }} {{ $chair->model }}</b></h1>

    <form action="{{ route('chairs.update', $chair->id) }}" method="post">

        @csrf
        @method('PUT')
        <br>
        <input type="hidden" name="id">
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                <label for="">Imagen: </label>
                <input type="file" name="image" id="" accept="image/*" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" id="" value="{{ $chair->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" id="" value="{{ $chair->model }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" id="" value="{{ $chair->color }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <br> <label for="">Peso Soportado: </label>
                <input class="form-control" type="number" name="weight" id="" value="{{ $chair->weight }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Respaldo: </label>
                <input class="form-control" type="text" name="fixed" id="" value="{{ $chair->fixed }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Anio: </label>
                <input class="form-control" type="year" name="year" id="" value="{{ $chair->year }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Material: </label>
                <input class="form-control" type="text" name="material" id="" value="{{ $chair->material }}" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Rgb: </label>
            <input class="form-control" type="text" name="rgb" id="" value="{{ $chair->rgb }}" required>
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $chair->description }}</textarea>
        </div>
        <div>
            <br>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" value="{{ $chair->comment }}">
        </div>
        <br>
        <di class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
</div>

</form>

</div>


@endsection