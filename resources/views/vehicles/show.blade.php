@extends('plantilla.dashboard')

@section('content')

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2>Vehículo: {{ $vehicle->brand }} {{ $vehicle->model }}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('vehicles.index') }}">< Regresar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Vehículo</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>
                    
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p><img style="width: 300px; height: 350; object-fit: cover; " src="/imagenes/vehicles/{{$vehicle->image}}"
                alt="{{$vehicle->brand}}{{$vehicle->model}}"/> </p>
                        <td>
                            <p><b>Número de serie: </b>{{ $vehicle->serialNumber }}</p>
                            <p><b>Color: </b>{{ $vehicle->color }}</p>
                            <p><b>Puertas: </b>{{ $vehicle->numberOfDoors }}</p>
                            <p><b>Asientos: </b>{{ $vehicle->numberOfSeats }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">Matrícula: </b>{{ $vehicle->carRegistration }}</p>
                        </td>
                        <td><p>{{ $vehicle->description }}</p></td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('vehicles.edit', $vehicle->id) }}">Editar</a>
                    <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
      </div>
</div>

@endsection