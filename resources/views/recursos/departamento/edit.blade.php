@extends('plantilla.main')
@section('titulo')
 Depatamentos
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> Editar departamento </h3>            
             
        
        {!!Form::model($departamento,['method'=>'PATCH','route'=>['departamento.update',$departamento->Codigo] ])!!}
        {{Form::token()}}

        <div class="form-group">
        <label form="Nombre">NOMBRE</label>
        <input type="text" name="Nombre" class="form-control" value="{{$departamento->Nombre}}" placeholder="continuo">
        </div>

        <div class="form-group">
        <label form="NroEmpleado">NRO DE EMPLEADOS</label>
        <input type="number" name="NroEmpleado" class="form-control" value="{{$departamento->NroEmpleado}}" placeholder="continuo">
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