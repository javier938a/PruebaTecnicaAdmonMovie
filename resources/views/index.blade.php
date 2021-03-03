@extends('plantilla')

@section('contenido')
    <center><h1>Catalogo peliculas</h1></center>
    <div class="row">
        <div class="container">
            <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3">
                @foreach ($peliculas as $item)
                <div class="card">
                    <h5 class="card-header">{{ $item->titulo }}</h5>
                    <div class="card-body">
                      <h5 class="card-title">Sinopsis</h5>
                      <p class="card-text">
                        {{ $item->sipnosis }}
                      </p>
                      <h5 class="card-title">Año de estreño</h5>
                      <p class="card-text">
                        {{ $item->anio_estreno }}
                      </p>
                      <h5 class="card-title">Categoria</h5>
                      <p class="card-text">
                        {{ $item->id_categoria }}
                      </p>
                      <h5 class="card-title">Costo de renta por dia</h5>
                      <p class="card-text">
                        ${{ $item->costo_de_renta_dia }}
                      </p>
                      <h5 class="card-title">Estado</h5>
                      <p class="card-text">
                        ${{ $item->estado }}
                      </p>
                      <h5 class="card-title">Cantidad disponible</h5>
                      <p class="card-text">
                        ${{ $item->cantidad }}
                      </p>
                      <a href="#" class="btn btn-primary">Rentar</a>
                      <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{ $peliculas->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
    
@endsection