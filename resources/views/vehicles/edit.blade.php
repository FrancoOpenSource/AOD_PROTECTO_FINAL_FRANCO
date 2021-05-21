@extends('plantilla.dashboard')


@section('content')

<div class="container">
    <h1>Actualizar datos del vehículo <b>{{ $vehicle->brand }} {{ $vehicle->model }}</b></h1>

    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="post">

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
                <input class="form-control" type="text" name="brand" value="{{ $vehicle->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" value="{{ $vehicle->model }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" value="{{ $vehicle->color }}" required>
            </div>
        </div>
        <br>
        <div class="row b-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de serie: </label>
                <input class="form-control" type="text" name="serialNumber" value="{{ $vehicle->serialNumber }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Matrícula: </label>
                <input class="form-control" type="text" name="carRegistration" value="{{ $vehicle->carRegistration }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de puertas: </label>
                <input class="form-control" type="number" name="numberOfDoors" value="{{ $vehicle->numberOfDoors }}" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de asientos: </label>
                <input class="form-control" type="number" name="numberOfSeats" value="{{ $vehicle->numberOfSeats }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Kilometraje: </label>
                <input class="form-control" type="number" name="mileage" value="{{ $vehicle->mileage }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cilindraje: </label>
                <input class="form-control" type="number" name="cylinderCapacity" value="{{ $vehicle->cylinderCapacity }}" required>
            </div>
        </div>
      
        
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $vehicle->description }}</textarea>
        </div>
        <br>
        <div>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" value="{{ $vehicle->comment }}">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

</div>


@endsection