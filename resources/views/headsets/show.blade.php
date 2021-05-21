@extends('plantilla.dashboard')

@section('content')

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2>Audifono: {{ $headset->brand }} {{ $headset->model }}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('headsets.index') }}">< Regresar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Audifono</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>
                    
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p><img style="width: 300px; height: 350; object-fit: cover; " src="/imagenes/headsets/{{$headset->image}}" alt="{{$headset->brand}}{{$headset->model}}" /></p>
                        <td>
                            <p><b>Número de serie: </b>{{ $headset->serialNumber }}</p>
                            <p><b>Color: </b>{{ $headset->color }}</p>
                            <p><b>Anio: </b>{{ $headset->year }}</p>
                            <p><b>RGB: </b>{{ $headset->rgb }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">Tipo: </b>{{ $headset->type }}</p>
                        </td>
                        <td><p>{{ $headset->description }}</p></td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                
                    <a class="btn btn-primary" href="{{ route('headsets.edit', $headset->id) }}">Editar</a>
                    <form action="{{ route('headsets.destroy', $headset->id) }}" method="post">
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