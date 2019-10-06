@extends('plantilla.main')
@section('titulo')
 CAPACITACION
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVA CAPACITACION </h3>
             
        
        {!!Form::open( array('url'=>'capacitacion','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}

        <div class="form-group">

        <label form="Codigo">CODIGO</label>
        <input type="text" name="Codigo" class="form-control" value="0" placeholder="1">
      
        </div>

        <div class="form-group">

        <label form="Descripcion">DESCRIPCION</label>
        <input type="text" name="Descripcion" class="form-control" placeholder="continuo">
      
        </div>

        <div class="form-group">

        <label form="FechaInicio">FECHA INICIO</label>
       <!-- <input type="text" name="FechaInicio" class="form-control" placeholder="continuo">
        --><input type="date" name="FechaInicio" id="date" pattern="">
      
        </div>


        <div class="form-group">

        <label form="FechaFin">FECHA FIN</label>
       
         <input type="date" name="FechaFin" id="date" pattern="">
        </div>
         <div class="form-group">
        <label form="IdEmpleado">Empleado</label>
        <select type="text" name="IdEmpleado" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($empleados as $e)

          <option value="{{$e->Id}}">{{$e->Nombre}}</option> 

       @endforeach
        </select>   
        </div>
         <div class="form-group">

        <label form="TipoCapacitacion">Tipo Capacitacion</label>
        <input type="text" name="TipoCapacitacion" class="form-control">
      
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