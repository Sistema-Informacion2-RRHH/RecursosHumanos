@extends('plantilla.main')
@section('titulo')
 JEFEDEPARTAMENTOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR JEFEDEPARTAMENTO </h3>            
             
        
        {!!Form::model($jefedepartamento,['method'=>'PATCH','route'=>['jefedepartamento.update',$jefedepartamento->Codigo] ])!!}
        {{Form::token()}}

        <div class="form-group">
        <label form="CorreoElectronico">E-MAIL</label>
        <input type="email" name="CorreoElectronico" class="form-control" value="{{$jefedepartamento->CorreoElectronico}}" placeholder="ejemplo@correo.com" required>     
        </div>

        <div class="form-group">
        <label form="Descripcion">DESCRIPCION</label>
        <input type="text" name="Descripcion" class="form-control" value="{{$jefedepartamento->Descripcion}}" placeholder="descripcion" required>     
        </div>

        <div class="form-group">
        <label form="CodigoDpto">DEPARTAMENTO</label>
        <select name="CodigoDpto" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($departamento as $c)
          @if($c->Codigo==$jefedepartamento->CodigoDpto)
          <option value="{{$c->Codigo}}">{{$c->Nombre}}</option>
          @else
          <option value="{{$c->Codigo}}">{{$c->Nombre}}</option>
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