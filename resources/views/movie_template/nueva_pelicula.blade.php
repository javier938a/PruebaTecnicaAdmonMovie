@extends('plantilla')

@section('contenido')
<form action="{{ route('create_movie') }}" method="POST">
    @csrf
    <!-- Name input -->
    <div class="form-outline mb-4">
      <input type="text" id="titulo" name="Titulo" class="form-control" />
      <label class="form-label" for="titulo">Titulo</label>
    </div>
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="sipnosis" >Email address</label>
      <textarea name="sipnosis" rows="10" cols="50"></textarea>
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="anio_extreno" >Email address</label>
      <input type="date" name="anio_extreso" id="anio_extreno">
    </div>
  
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Subscribe</button>
  </form>
@endsection