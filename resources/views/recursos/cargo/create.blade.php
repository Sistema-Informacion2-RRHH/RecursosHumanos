@extends('plantilla.main')
@section('titulo')
 Cargos
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> Nuevo Cargo </h3>            
             
        
        {!!Form::open( array('url'=>'cargo','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}

        <div class="form-group">
        <label form="Nombre">NOMBRE</label>
        <input type="text" name="Nombre" class="form-control" placeholder="joaquin">     
        </div>

        <div class="form-group">
        <label form="Descripcion">DESCRIPCION</label>
        <input type="text" name="Descripcion" class="form-control" placeholder="ocupacion">     
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