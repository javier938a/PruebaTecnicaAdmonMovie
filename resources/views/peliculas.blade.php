@extends('plantilla')

@section('contenido')
<div class="row">
    <div class="col-12">
        <h1>Listado de Peliculas</h1>
    </div>
</div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
            <a href="{{ route('new_movie') }}" class="btn btn-primary">Nueva Pelicula</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @include('movie_template.fragmentos.info')
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">sipnosis</th>
                        <th scope="col">Año de estreno</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Costo renta(diario)</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Cantidad</th>
                        <th colspan="3" scope="col">Operaciones</th>
                    </thead>
                    <tbody>
                        @foreach ($peliculas as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->titulo }}</td>
                                <td>{{ $item->sipnosis }}</td>
                                <td>{{ $item->anio_estreno }}</td>
                                <td>{{ $item->id_categoria }}</td>
                                <td>{{ $item->costo_de_renta_dia }}</td>
                                <td>{{ $item->estado }}</td>
                                <td>{{ $item->cantidad }}</td>
                                <td><a href="{{ route('detalle_movie', $item->id) }}" class="btn btn-secondary">ver</a></td>
                                <td><a href="{{ route('edit_movie', $item->id) }}" class="btn btn-primary">Editar</a></td>
                                <td>
                                    <form action="{{ route('del_movie', $item->id) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
    
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                  </table>
                  {{--!! $peliculas->render() !!--}}
              </div>
        </div>
    </div>    
@endsection