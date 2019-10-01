@extends('plantilla.main')
@section('titulo')
 Depatamentos
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVO DEPARTAMENTO </h3>            
             
        
        {!!Form::open( array('url'=>'departamento','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}

        <div class="form-group">

        <label form="Codigo">CODIGO</label>
        <input type="number" name="Codigo" class="form-control" value="0" placeholder="0" required>
      
        </div>

        <div class="form-group">
        <label form="Nombre">NOMBRE</label>
        <input type="text" name="Nombre" class="form-control" placeholder="contaduria" required>
        </div>

        <div class="form-group">
        <label form="NroEmpleado">NRO DE EMPLEADOS</label>
        <input type="number" name="NroEmpleado" class="form-control" placeholder="0" required>
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