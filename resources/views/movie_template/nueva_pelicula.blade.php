@extends('plantilla')

@section('contenido')
<div class="row">
  <div class="col-12">
    <h1>Registrar Pelicula</h1>
  </div>
</div>
<div class="col-12">
  <div class="col-12">
    {{--Para el registro se usa una plantilla partial para poder reutilizarla en la edicion de una categoria--}}
    @include('movie_template.fragmentos.error')
    {!! Form::open(['url'=>'/pelicula/insertar_pelicula', 'method'=>'post']) !!}
      @include('movie_template.fragmentos.form')
      <button type="submit" class="btn btn-primary">Registrar Pelicula</button>
    {!! Form::close() !!}
  </div>
</div>
{{--<form action="{{ route('create_movie') }}" method="POST">
    @csrf
    <!-- Name input -->
    <div class="form-outline mb-4">
      <input type="text" id="titulo" name="titulo" class="form-control" />
      <label class="form-label" for="titulo">Titulo</label>
    </div>
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="sipnosis" >Email address</label>
      <textarea class="form-control" id="sipnosis" name="sipnosis" rows="10" cols="50"></textarea>
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="anio_extreno" >Año de estreno</label>
      <input class="form-control"  type="date" name="anio_extreno" id="anio_extreno">
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="cate" >Categoria</label>
      <select class="form-control" name="cate" id="cate">
        <option value="value1">Value 1</option>
        <option value="value2" selected>Value 2</option>
        <option value="value3">Value 3</option>
      </select>
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="costo_renta_dia" >Costo de renta por dia</label>
      <input class="form-control" type="text" name="costo_renta_dia" id="costo_renta_dia">
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="estado" >Estado</label>
      <select class="form-control" name="estado" id="estado">
          <option value="1" selected>Disponible</option>
          <option value="0">No disponible</option>
      </select>
    </div>
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Subscribe</button>
  </form>--}}
@endsection