@extends('plantilla.main')
@section('titulo')
 SEGUROS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR SEGURO </h3>            
             
        
        {!!Form::model($seguro,['method'=>'PATCH','route'=>['seguro.update',$seguro->Codigo] ])!!}
        {{Form::token()}}


        <div class="form-group">
        <label form="NombreAseguradora">NOMBRE DE LA ASEGURADORA</label>
        <input type="text" name="NombreAseguradora" class="form-control" value="{{$seguro->NombreAseguradora}}" placeholder="buen samaritanno">   
        </div>

        <div class="form-group">
        <label form="Telefono">TELEFONO</label>
        <input type="number" name="Telefono" class="form-control" value="{{$seguro->Telefono}}" placeholder="3333333">   
        </div>

        <div class="form-group">
        <label form="Descripcion">DESCRIPCION</label>
        <input type="text" name="Descripcion" class="form-control" value="{{$seguro->Descripcion}}"  placeholder="detalle de la empresa">   
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