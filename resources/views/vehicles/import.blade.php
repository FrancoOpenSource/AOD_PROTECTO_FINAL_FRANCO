@extends('plantilla.dashboard')
@section('title', 'Importar datos')

@section('content')

<div class="container">

<h3 class="mb-5">Carga el archivo xlsx para importar los datos</h3>


    <form action="{{ url('vehicles/importData') }}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col">
                <input type="file" name="excel" id="" class="form-group" accept=".xlsx, .xls">
            </div>
            <div class="col">
                <input type="submit" value="Importar" class="btn btn-outline-info">
            </div>
        </div>

    </form>
</div>
@endsection
