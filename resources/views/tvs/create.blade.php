@extends('plantilla.dashboard')

@section('content')

<div class="container">
    <h1>Formulario para crear un nuevo registro</h1>

    <form action="{{ route('tvs.store') }}" method="post" enctype="multipart/form-data">

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
                <label for="">Pulgadas: </label>
                <input class="form-control" type="number" name="inch" id="" placeholder="Pulgadas" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Herz: </label>
                <input class="form-control" type="number" name="hz" id="" placeholder="Herz" required>
            </div>
        </div>
       
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tecnologia: </label>
                <input class="form-control" type="text" name="system" id="" placeholder="Sistema Operativo" required>
            </div>            
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Anio: </label>
                <input class="form-control" type="number" name="year" id="" placeholder="Anio" required>
            </div>  
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo: </label>
                <input class="form-control" type="text" name="type" id="" placeholder="Tipo" required>
            </div>                      
        </div>
     
        <div>
                <label for="">Wifi: </label>
                <input class="form-control" type="text" name="wifi" id="" placeholder="Wifi" required>
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