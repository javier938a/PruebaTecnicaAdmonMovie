@extends('plantilla')

@section('contenido')
    <a href="{{ route('new_movie') }}" class="btn btn-primary">Nueva Pelicula</a>
    @foreach ($equipo as $item)
        <a href="{{ route('movie', $item) }}">{{ $item }}</a><br>
    @endforeach
@endsection