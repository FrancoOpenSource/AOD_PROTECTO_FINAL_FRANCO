@extends('plantilla.dashboard')


@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-primary ml-2" href="{{ route('users.create') }}"><i class="fas fa-plus"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado de usuarios registrados en la base de datos</h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <span onclick="exportVehiclesToCSV(event.target)" data-href="/exportVehiclesToCSV" id="export"
                            class="btn btn-info ml-2"><i class="fas fa-file-csv"></i></span>
                        <a class="btn btn-outline-info ml-2" href="{{ url('/users/exportToXlsx') }}">
                            <i class="fas fa-file-excel"></i>
                    </a>
                        <a class="btn btn-outline-info ml-2" href="{{ url('/users/import') }}">
                            <i class="fas fa-file-import"></i>
                    </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>

                </thead>

                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>
                            <p>{{ $user->id }}</p>
                        </td>
                        <td>
                            <a class="btn btn-info btn-small" href="{{ route('users.show', $user->id) }}">
                                <h4>{{ $user->name }} </h4>
                        </td>
                        </a>
                        <td>
                            <p><b>Email: </b>{{ $user->email }}</p>

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
    $('#example').DataTable();
});
</script>

<script>
function exportVehiclesToCSV(_this) {
    Doris
    let _url = $(_this).data('href');
    window.location.href = _url;
}
</script>

@endsection