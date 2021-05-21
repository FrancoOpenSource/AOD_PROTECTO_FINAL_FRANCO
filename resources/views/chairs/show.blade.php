@extends('plantilla.dashboard')

@section('content')

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2>Teclado: {{ $chair->brand }} {{ $chair->model }}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('chairs.index') }}">< Regresar</a>
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
                            <p><img style="width: 200px; height: 250; object-fit: cover; " src="/imagenes/chairs/{{$chair->image}}" alt="{{$chair->brand}}{{$chair->model}}" /></p>
                        <td>
                            <p><b>Modelo: </b>{{ $chair->model }}</p>
                            <p><b>Color: </b>{{ $chair->color }}</p>
                            <p><b>Elaboracion: </b>{{ $chair->year }}</p>
                            <p><b>Peso Soportado: </b>{{ $chair->weight }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">Material: </b>{{ $chair->material }}</p>
                        </td>
                        <td><p>{{ $chair->description }}</p></td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                
                    <a class="btn btn-primary" href="{{ route('chairs.edit', $chair->id) }}">Editar</a>
                    <form action="{{ route('chairs.destroy', $chair->id) }}" method="post">
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