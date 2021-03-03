@extends('plantilla')

@section('contenido')
    <div class="row">
        <h1>Editar Pelicula</h1>
    </div>
    <div class="row">
        <div class="col-12">
            {{--Formulario para editar pelicula--}}
            @include('movie_template.fragmentos.error')
            {!! Form::model($pelicula, ['route'=>['update_movie', $pelicula->id], 'method'=>'POST']) !!}
                @include('movie_template.fragmentos.form')
                <button type="submit" class="btn btn-primary">Guardar</button>
            {!! Form::close() !!}
        </div>
    </div>    
@endsection