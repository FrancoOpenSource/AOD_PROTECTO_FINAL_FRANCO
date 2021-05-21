@extends('plantilla.dashboard')

@section('content')

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2>Teclado: {{ $keyboard->brand }} {{ $keyboard->model }}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('keyboards.index') }}">< Regresar</a>
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
                            <p><img style="width: 300px; height: 350; object-fit: cover; " src="/imagenes/keyboards/{{$keyboard->image}}" alt="{{$keyboard->brand}}{{$keyboard->model}}" /></p>
                        <td>
                            <p><b>Modelo: </b>{{ $keyboard->model }}</p>
                            <p><b>Numero de Teclas: </b>{{ $keyboard->ckey }}</p>
                            <p><b>Elaboracion: </b>{{ $keyboard->year }}</p>
                            <p><b>RGB: </b>{{ $keyboard->rgb }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">Tipo: </b>{{ $keyboard->type }}</p>
                        </td>
                        <td><p>{{ $keyboard->description }}</p></td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                
                    <a class="btn btn-primary" href="{{ route('keyboards.edit', $keyboard->id) }}">Editar</a>
                    <form action="{{ route('keyboards.destroy', $keyboard->id) }}" method="post">
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