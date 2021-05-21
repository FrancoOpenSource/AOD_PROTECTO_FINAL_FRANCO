@extends('plantilla.dashboard')
@section('title', 'Informacion')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-11">
                    <spam class="card-title"><spam>Information</spam>
                </div>

                <div class="card">

                    <table class="table table-striped table-responsive">

                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Siglas</th>
                                <th>Contacto</th>
                                <th>Eslogan</th>
                                <th>Acciones</th>

                            </tr>

                        </thead>

                        <tbody>
                            @forelse ($information as $info)
                            <tr>
                                <td>{{ $info->name}}</td>
                                <td>{{ $info->shortName }}</td>
                                <td>
                                <p>{{ $info->email }}</p>
                                <p>{{ $info->phone }}</p>
                                </td>
                                <td>{{ $info->slogan}}</td>                               
                                <td> <a class="btn btn-outline-info" href="{{ route('information.edit', $info->id) }}">
                                    <i class="fas fa-edit"></i></a></td>

                                @empty
                                <h1>La tabla no tiene datos</h1>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- DataTables -->
        <script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>


        @endsection