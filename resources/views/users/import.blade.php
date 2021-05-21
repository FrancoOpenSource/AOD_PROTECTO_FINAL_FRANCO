@extends('plantilla.dashboard')
@section('title', 'Importar datos')

@section('content')
    <form method="post" action="{{ url('users/importData') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel" class="form-control" id="">
        <input class="btn btn-outline-info mt-5" type="submit" value="Subir">
    </form>
@endsection