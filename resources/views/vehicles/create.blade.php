@extends('plantilla.dashboard')

@section('content')

<div class="container">
    <h1>Formulario para crear un nuevo registro</h1>

    <form action="{{ route('vehicles.store') }}" method="post" enctype="multipart/form-data">

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
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de serie: </label>
                <input class="form-control" type="text" name="serialNumber" id="" placeholder="Número de serie" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Matrícula: </label>
                <input class="form-control" type="text" name="carRegistration" id="" placeholder="Matrícula" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de puertas: </label>
                <input class="form-control" type="number" name="numberOfDoors" id="" placeholder="Número de puertas" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de asientos: </label>
                <input class="form-control" type="number" name="numberOfSeats" id="" placeholder="Número de asientos" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Kilometraje: </label>
                <input class="form-control" type="number" name="mileage" id="" placeholder="Kilometraje" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cilindraje: </label>
                <input class="form-control" type="number" name="cylinderCapacity" id="" placeholder="Cilindraje" required>
            </div>
        </div>
        <br>

        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
        </div>
        <br>
        <div>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" id="" placeholder="comment">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

</div>

@endsection