@extends('plantilla.main')
@section('titulo')
 CONTRATOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> Editar Contrato {{$contrato->Codigo}}</h3>            
             
        
        {!!Form::model($contrato,['method'=>'PATCH','route'=>['contrato.update',$contrato->Codigo] ])!!}
        {{Form::token()}}


        <div class="form-group">
        <label form="FechaInicio">FECHA INICIO</label>
        <input type="date" name="FechaInicio" class="form-control" value="{{$contrato->FechaInicio}}">
        </div>

        <div class="form-group">
        <label form="FechaFin">FECHA FIN</label>
        <input type="date" name="FechaFin" class="form-control" value="{{$contrato->FechaFin}}" >
        </div>

        <div class="form-group">
        <label form="Tipo">TIPO</label>
        <input type="text" name="Tipo" class="form-control" value="{{$contrato->Tipo}}" placeholder="continuo">
        </div>



        <div class="form-group">
        <label form="idBeneficio">BENEFICIO</label>
        <select name="idBeneficio" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($beneficio as $c)
          @if($c->id==$contrato->idBeneficio)
          <option value="{{$c->id}}" selected>{{$c->Descripcion}}</option>
          @else
          <option value="{{$c->id}}">{{$c->Descripcion}}</option> 
          @endif
       @endforeach
        </select>   
        </div>

        <div class="form-group">
        <label form="idEmpleado">EMPLEADO</label>
        <select name="idEmpleado" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($empleado as $c)
           @if($c->id==$contrato->idEmpleado)
          <option value="{{$c->id}}" selected>{{$c->Nombre}}</option>
          @else
          <option value="{{$c->id}}">{{$c->Nombre}}</option> 
          @endif
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