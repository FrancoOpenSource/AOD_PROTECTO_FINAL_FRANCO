@extends('plantilla.dashboard')


@section('content')

<div class="container">
    <h1>Actualizar datos</h1>

    <form action="{{ route('information.update', $information->id) }}" method="post">

        @csrf
        @method('PUT')

        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
                <label for="">Nombre del sistema: </label>
                <input class="form-control" type="text" name="name" value="{{ $information->name }}" required>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
                <label for="">Nombre corto: </label>
                <input class="form-control" type="text" name="shortName" value="{{ $information->shortName }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                <label for="">Eslogan: </label>
                <input class="form-control" type="text" name="slogan" value="{{ $information->slogan }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
                <label for="">Telefono: </label>
                <input class="form-control" type="tel" name="phone" value="{{ $information->phone}}" required>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
                <label for="">Correo Electronico: </label>
                <input class="form-control" type="text" name="email" value="{{ $information->email }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
                <label for="">Copyrigth: </label>
                <input class="form-control" type="text" name="copyrigth" value="{{ $information->copyrigth}}" required>
            </div>              
            <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
                <label for="">Version: </label>
                <input class="form-control" type="text" name="version" value="{{ $information->version }}" required>
            </div>         
            </div>
            <br>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                <label for="">Dirrecion: </label>
                <input class="form-control" type="text" name="address" value="{{ $information->address }}" required>
            </div>
        </div>
        <br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input class="btn btn-info" type="reset" value="Restablecer">
    <input class="btn btn-primary" type="submit" value="Guardar cambios">
</div>

</form>

</div>


@endsection