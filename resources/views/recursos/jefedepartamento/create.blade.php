@extends('plantilla.main')
@section('titulo')
JEFE POR DEPARTAMENTO
@endsection


@if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h3> NUEVO JEFE POR DEPARTAMENTO </h3>

            {!!Form::open( array('url'=>'jefedepartamento','method'=>'POST','autocomplete'=>'off') )!!}
            {!!Form::token()!!}

            <div class="form-group">
                <label form="Codigo">CODIGO</label>
                <input type="number" name="Codigo" class="form-control" value="0" placeholder="0">
            </div>

            <div class="form-group">
                <label form="CorreoElectronico">E-MAIL</label>
                <input type="email" name="CorreoElectronico" class="form-control" placeholder="ejemplo@correo.com"
                    required>
            </div>

            <div class="form-group">
                <label form="Descripcion">DESCRIPCION</label>
                <input type="text" name="Descripcion" class="form-control" placeholder="descripcion" required>
            </div>

            <div class="form-group">
                <label form="CodigoDpto">DEPARTAMENTO</label>
                <select name="CodigoDpto" class="browser-default custom-select custom-select-lg mb-3">

                    @foreach($departamento as $c)

                    <option value="{{$c->Codigo}}">{{$c->Nombre}}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group">

                <button class="btn btn-primary" type="submit">GUARDAR</button>
                <button class="btn btn-danger" type="reset">CANCELAR</button>

            </div>

            {!!Form::close()!!}
        </div>

    </div>
</div>

@endsection