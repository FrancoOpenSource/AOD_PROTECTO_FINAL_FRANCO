@extends('plantilla.dashboard')


@section('content')

<div class="container">
    <h1>Actualizar datos de audifonos <b>{{ $headset->brand }} {{ $headset->model }}</b></h1>

    <form action="{{ route('headsets.update', $headset->id) }}" method="post">

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
                <input class="form-control" type="text" name="brand" id="" value="{{ $headset->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" id="" value="{{ $headset->model }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" id="" value="{{ $headset->color }}" required>
            </div>
        </div>    
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de serie: </label>
                <input class="form-control" type="text" name="serialNumber" id="" value="{{ $headset->serialNumber }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo: </label>
                <input class="form-control" type="text" name="type" id="" value="{{ $headset->type }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Anio: </label>
                <input class="form-control" type="number" name="year" id="" value="{{ $headset->year }}" required>
            </div>
        </div>      
        <div>
            <label for="">RGB: </label>
            <input class="form-control" type="text" name="rgb" id="" value="{{ $headset->rgb }}" required>
        </div>
       
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $headset->description }}</textarea>
        </div>
        <div>
            <br>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" value="{{ $headset->comment }}">
        </div>
        <br>
        <di class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
</div>

</form>

</div>


@endsection