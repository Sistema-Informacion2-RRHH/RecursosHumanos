@extends('plantilla.main')
@section('titulo')
 Depatamentos
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> Editar Beneficio {{$beneficio->Descripcion}}</h3>            
             
        
        {!!Form::model($beneficio,['method'=>'PATCH','route'=>['beneficio.update',$beneficio->id] ])!!}
        {{Form::token()}}

        <div class="form-group">
        <label form="Descripcion">DESCRIPCION</label>
        <input type="text" name="Descripcion" class="form-control" value="{{$beneficio->Descripcion}}" placeholder="continuo">
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