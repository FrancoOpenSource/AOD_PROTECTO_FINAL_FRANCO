@extends('plantilla.dashboard')

@section('title', 'Cards-Vehículos')

@section('content')
<div class="section-title">       
      </div>
      <div class="container">
        <div class="row">

          @forelse($vehicles as $vehicle)
          <!-- renderizar datos -->

          <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mb-3 mr-2 ml-2">
            <div class="card-header">
              <font color="teal">
                <h3 class="text-secundary text-center"><b>{{ $vehicle->brand }}</b>
                  <h4 class="text-center">{{ $vehicle->model }}
                    <h /4>
                </h3>
              </font>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $vehicle->description }}</p>
              <div class="">
                <p class="text-muted">Color: <b>{{ $vehicle->color }}</b></p>
              </div>
              <div class="">
                <p class="text-muted">Kilometraje:<b> {{ $vehicle->mileage }}</b></p>
                <br>
                <img style="width: 240px; height: 400; object-fit: cover; " src="/imagenes/vehicles/{{$vehicle->image}}" alt="{{$vehicle->brand}}{{$vehicle->model}}" />
              </div>
              <br>
              <div class="">
                <p class="text-muted">Comentario: <font color="teal">{{ $vehicle->comment }}</font>
                </p>
              </div>
            </div>
            <div class="card-footer bg-light d-grid gap-2 d-md-flex justify-content-md-end">
              <a class="btn btn-outline-info padding-left mr-2" href="{{ url('login') }}"><i class="fas fa-info">
                </i>
                <font color="teal"><b> Ver más </b></font>
              </a>
            </div>
          </div>
          @empty
          <!-- Mensaje por si no encuentra datos -->
          <del>No hay registros en la base de datos</del>
          @endforelse
        </div>
      </div>
    </section>

@endsection