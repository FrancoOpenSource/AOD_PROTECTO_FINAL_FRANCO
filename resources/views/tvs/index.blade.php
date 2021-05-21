@extends('plantilla.dashboard')
@section('title', 'Monitores')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{ route('tvs.create') }}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado de Monitores registrados en la base de datos</h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class='btn btn-outline-info mr-2' href="{{ url('/tvs/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/tvs/cards') }}" alt="Vista en cards"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/tvs/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/tvs/exportToXlsx') }}"><i class="fas fa-file-excel"></i></a>
                        <span onclick="exportToCsv(event.target)" data-href="{{ url('/tvs/exportToCsv') }}" id="export" class="btn btn-outline-info">
                            <i class="fas fa-file-csv"></i>
                        </span>
                        <a class="btn btn-outline-info mr-2" href="/tvsxml"><i class="btn btn-info">XML</i></a>

                    </div>
                </div>
                <div class="card-body">


                    <table id="example" class="table table-striped table-responsive">

                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Monitor</th>
                                <th>Informacion</th>
                                <th>Medida</th>
                                <th>Tasa de Refresco</th>
                                <th>Conexion</th>
                                <th>Elaboracion</th>

                            </tr>

                        </thead>

                        <tbody>
                            @forelse ($tvs as $tv)
                            <tr>
                                <td>
                                    <img style="width: 200px; height: 100; object-fit: cover; " src="/imagenes/tvs/{{$tv->image}}" alt="{{$tv->brand}}{{$tv->model}}" />
                                </td>
                                <td style="width: 25%">
                                    <a href="{{ route('tvs.show', $tv->id) }}">
                                        <h4 class="text-left"> <span class="badge bg-info">{{ $tv->brand }}</span></h4>
                                </td>
                                </a>
                                <td style="width: 60%">
                                    <p><b>Modelo: </b>{{ $tv->model }}</p>
                                    </p>
                                </td>
                                <td style="width: 60%">
                                    <p><b>Pulgadas: </b>{{ $tv->inch }}</p>
                                    </p>
                                </td>
                                <td style="width: 60%">
                                    <p><b>Herz: </b>{{ $tv->hz }}</p>
                                    </p>
                                </td>
                                <td style="width: 0">
                                    <p><b>Wifi: </b>{{ $tv->wifi }}</p>
                                </td>
                                <td style="width: 0">
                                    <p><b>Anio: </b>{{ $tv->year }}</p>
                                </td>

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

        <!-- Aplicación de DataTable -->
        <script>
            $(function() {
                $('#example').DataTable({
                    dom: 'Blfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>

        <script>
            function exportToCsv(_this) {
                let _url = $(_this).data('href');
                window.location.href = _url;
            }
        </script>


        @endsection