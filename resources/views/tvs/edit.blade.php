@extends('plantilla.dashboard')


@section('content')

<div class="container">
    <h1>Actualizar datos de teclados <b>{{ $tv->brand }} {{ $tv->model }}</b></h1>

    <form action="{{ route('tvs.update', $tv->id) }}" method="post">

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
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" id="" value="{{ $tv->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" id="" value="{{ $tv->model }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Pulgadas: </label>
                <input class="form-control" type="number" name="inch" id="" value="{{ $tv->inch }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Herz: </label>
                <input class="form-control" type="number" name="hz" id="" value="{{ $tv->hz }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tecnlogia: </label>
                <input class="form-control" type="text" name="system" id="" value="{{ $tv->system }}"  required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Anio: </label>
                <input class="form-control" type="number" name="year" id="" value="{{ $tv->year }}"  required>
            </div>            
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo: </label>
                <input class="form-control" type="text" name="type" id="" value="{{ $tv->type }}" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Wifi: </label>
                <input class="form-control" type="text" name="wifi" id="" value="{{ $tv->wifi }}"  required>
        </div>
        <br>
        <div>    
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $tv->description }}</textarea>
        </div>     
       <div>
       <br>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" value="{{ $tv->comment }}">
        </div>
        <br>
        <di class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

</div>


@endsection