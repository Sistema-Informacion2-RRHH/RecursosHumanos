@extends('plantilla.main')

@section('titulo')
 CAPACITACION
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> Editar Capacitacion {{$capacitacion->Descripcion}}</h3>            
             
        
        {!!Form::model($capacitacion,['method'=>'PATCH','route'=>['capacitacion.update',$capacitacion->Codigo] ])!!}
        {{Form::token()}}


        <div class="form-group">
        <label form="Descripcion">DESCRIPCION</label>
        <input name="Descripcion" type="text" required="required" class="form-control" value="{{$capacitacion->Descripcion}}" placeholder="continuo">
        </div>

        <div class="form-group">
        <label form="FechaInicio">FECHA INICIO</label>
        <input name="FechaInicio" type="date" required="required" class="form-control"  value="{{$capacitacion->FechaInicio}}">
        </div>


        <div class="form-group">

        <label form="FechaFin">FECHA FIN</label>
        <input name="FechaFin" type="date" required="required" class="form-control" value="{{$capacitacion->FechaFin}}">
      
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