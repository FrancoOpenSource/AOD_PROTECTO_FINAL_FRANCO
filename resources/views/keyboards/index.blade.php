@extends('plantilla.dashboard')
@section('title', 'Teclados')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{ route('keyboards.create') }}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado de Teclados registrados en la base de datos</h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class='btn btn-outline-info mr-2' href="{{ url('/keyboards/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/keyboards/cards') }}" alt="Vista en cards"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/keyboards/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/keyboards/exportToXlsx') }}"><i class="fas fa-file-excel"></i></a>
                        <span onclick="exportToCsv(event.target)" data-href="{{ url('/keyboards/exportToCsv') }}" id="export" class="btn btn-outline-info">
                            <i class="fas fa-file-csv"></i>
                        </span>
                        <a class="btn btn-outline-info mr-2" href="/keyboardsxml"><i class="btn btn-info">XML</i></a>
                    </div>
                </div>
                <div class="card-body">


                    <table id="example" class="table table-striped table-responsive">

                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Teclado</th>
                                <th>Informacion</th>
                                <th>Medida</th>
                                <th>Teclas</th>
                                <th>RGB</th>
                                <th>Elaboracion</th>

                            </tr>

                        </thead>

                        <tbody>
                            @forelse ($keyboards as $keyboard)
                            <tr>
                                <td>
                                    <img style="width: 200px; height: 100; object-fit: cover; " src="/imagenes/keyboards/{{$keyboard->image}}" alt="{{$keyboard->brand}}{{$keyboard->model}}" />
                                </td>
                                <td style="width: 25%">
                                    <a href="{{ route('keyboards.show', $keyboard->id) }}">
                                        <h4 class="text-left"> <span class="badge bg-info">{{ $keyboard->brand }}</span></h4>
                                </td>
                                </a>
                                <td style="width: 60%">
                                    <p><b>Modelo: </b>{{ $keyboard->model }}</p>
                                    </p>
                                </td>
                                <td style="width: 60%">
                                    <p><b>Tipo: </b>{{ $keyboard->form }}</p>
                                    </p>
                                </td>
                                <td style="width: 60%">
                                    <p><b>Cantidad: </b>{{ $keyboard->ckey }}</p>
                                    </p>
                                </td>
                                <td style="width: 0">
                                    <p>{{ $keyboard->type }}</p>
                                </td>
                                <td style="width: 0">
                                    <p><b>Anio: </b>{{ $keyboard->year }}</p>
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