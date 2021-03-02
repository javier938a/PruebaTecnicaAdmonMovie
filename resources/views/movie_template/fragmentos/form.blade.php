<div class="form-group">
    {!! Form::label('titulo','Titulo de la pelicula:') !!}
    {!! Form::text('titulo', null, ['class'=>'form-control'])!!}
    {!! Form::label('sipnosis', 'Descripcion:') !!}
    {!! Form::text('sipnosis', null, ['class'=>'form-control']) !!}

    {!! Form::label('anio_estreno', 'Año de estreno:') !!}
    {!! Form::text('anio_estreno', null, ['class'=>'form-control']) !!}

    {!! Form::label('id_categoria', 'Categoria:') !!}
    {!! Form::select('id_categoria', $categorias, null,['class'=>'form-control']) !!}
    {!! Form::label('costo_de_renta_dia', 'Costo por dia:') !!}
    {!! Form::text('costo_de_renta_dia', null,['class'=>'form-control']) !!}
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class'=>'form-control']) !!}
    {!! Form::label('cantidad', 'Cantidad disponible:') !!}
    {!! Form::text('cantidad', null, ['class'=>'form-control']) !!}
    <br>
</div>