@extends('plantilla')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <h1>Listar Categorias</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">

            <a href="{{ route('nueva_cate') }}" class="btn btn-primary">Nueva Categoria</a>
        </div>
    </div>
@endsection