@extends('plantilla')

{{--Aqui el formulario de busqueda de pelicula--}}
@section('busqueda')
    {!! Form::open(['route'=>'index', 'method'=>'GET', 'class'=>'d-flex input-group w-auto']) !!}
    {!! Form::text('clave_busqueda', null, ['class'=>'form-control', 'placeholder'=>'pelicula o categoria', 'aria-label'=>'Buscar Movies']) !!}
    <button class="btn btn-outline-primary" type="submit" data-mdb-ripple-color="dark">
        Buscar
    </button>
    {!! Form::close() !!}
@endsection

@section('contenido')
    <center><h1>Catalogo de peliculas</h1></center>
    <div class="row">
        <div class="container">
            <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3">
                {{--Se muestra en card el listado total de peliculas--}}
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