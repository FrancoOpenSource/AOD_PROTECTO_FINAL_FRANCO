@extends('plantilla.dashboard')


@section('content')

<div class="container">
    <h1>Actualizar datos de teclados <b>{{ $keyboard->brand }} {{ $keyboard->model }}</b></h1>

    <form action="{{ route('keyboards.update', $keyboard->id) }}" method="post">

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
                <input class="form-control" type="text" name="brand" id="" value="{{ $keyboard->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" id="" value="{{ $keyboard->model }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo de Keycap: </label>
                <input class="form-control" type="text" name="keycap" id="" value="{{ $keyboard->keycap }}" required>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                <label for="">Tamanio: </label>
                <input class="form-control" type="text" name="form" id="" value="{{ $keyboard->form }}" required>
            </div>
        </div>        
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo: </label>
                <input class="form-control" type="text" name="type" id="" value="{{ $keyboard->type }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Anio: </label>
                <input class="form-control" type="text" name="year" id="" value="{{ $keyboard->year }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cantidad de Teclas: </label>
                <input class="form-control" type="number" name="ckey" id="" value="{{ $keyboard->ckey }}" required>
            </div>
        </div>       
        <div>
            <label for="">RGB: </label>
            <input class="form-control" type="text" name="rgb" id="" value="{{ $keyboard->rgb }}" required>
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $keyboard->description }}</textarea>
        </div>
        <div>
            <br>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" value="{{ $keyboard->comment }}">
        </div>
        <br>
        <di class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
</div>

</form>

</div>


@endsection