@extends('plantilla.dashboard')

@section('content')

<div class="container">
    <br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2>Teclado: {{ $tv->brand }} {{ $tv->model }}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('tvs.index') }}">
                            < Regresar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <tr>                    
                        <th>Teclado</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>

                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p><img style="width: 300px; height: 350; object-fit: cover; " src="/imagenes/tvs/{{$tv->image}}" alt="{{$tv->brand}}{{$tv->model}}" /> </p>
                        <td>
                            <p><b>Modelo: </b>{{ $tv->model }}</p>
                            <p><b>Pulgadas: </b>{{ $tv->inch }}</p>
                            <p><b>Elaboracion: </b>{{ $tv->year }}</p>
                            <p><b>Wifi: </b>{{ $tv->wifi }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">Herz: </b>{{ $tv->hz }}</p>
                        </td>
                        <td>
                            <p>{{ $tv->description }}</p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                    <a class="btn btn-primary" href="{{ route('tvs.edit', $tv->id) }}">Editar</a>
                    <form action="{{ route('tvs.destroy', $tv->id) }}" method="post">
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