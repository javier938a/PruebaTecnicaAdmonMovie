@extends('plantilla')

@section('contenido')
<div class="row">
    <div class="col-12 bg-info">
        <h1>Pelicula {{ $detalle_pelicula->titulo }}</h1>
    </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header"></div>
                <div class="card-body bg-info">
                  <h5 class="card-title">{{ $detalle_pelicula->titulo }}</h5>
                  <p class="card-text">
                    Titulo:{{ $detalle_pelicula->titulo }}                  
                  </p>
                  <p class="card-text">
                   Sipnosis: {{ $detalle_pelicula->sipnosis }}
                  </p>
                  <p class="card-text">
                    Año de estreno: {{ $detalle_pelicula->anio_estreno }}
                  </p>
                  <p class="card-text">
                    Categoria: {{ $detalle_pelicula->id_categoria }}
                  </p>
                  <p class="card-text">
                      Costo de renta por dia:${{ $detalle_pelicula->costo_de_renta_dia}}
                  </p>
                  <p class="card-text">
                      Cantidad disponible: {{ $detalle_pelicula->cantidad }}
                  </p>
                  <p class="card-text">
                      Estado:{{ $detalle_pelicula->estado }}
                  </p>
                  <a href="{{ route('movie') }}" class="btn btn-primary">Atras</a>
                </div>
              </div>
        </div>
    </div>    
@endsection