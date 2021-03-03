@extends('plantilla')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <h1>Ingresar categorias</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {!! Form::open(['url'=>'/categorias/nueva_categoria', 'method'=>'post']) !!}
                @include('crud_categorias.fragmentos.form')
                <button type="submit" class="btn btn-primary">Registrar Pelicula</button>
            {!! Form::close() !!}

        </div>
    </div>
@endsection