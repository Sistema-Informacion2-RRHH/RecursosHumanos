@extends('plantilla.main')
@section('titulo')
 VACACIONES
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR VACACION </h3>            
             
        
        {!!Form::model($vacacion,['method'=>'PATCH','route'=>['vacacion.update',$vacacion->Id] ])!!}
        {{Form::token()}}

        <div class="form-group">
        <label form="FechaInicio">FECHA INICIO</label>
        <input type="date" name="FechaInicio" class="form-control" value="{{$vacacion->FechaInicio}}" required>     
        </div>

        <div class="form-group">
        <label form="FechaFin">FECHA FIN</label>
        <input type="date" name="FechaFin" class="form-control" value="{{$vacacion->FechaFin}}" required>     
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