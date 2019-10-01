@extends('plantilla.main')
@section('titulo')
 POSTULANTES
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR POSTULANTE </h3>            
             
        
        {!!Form::model($postulante,['method'=>'PATCH','files'=>true,'route'=>['postulante.update',$postulante->Id] ])!!}
        {{Form::token()}}

        <div class="form-group">
        <label form="CI">CI</label>
        <input type="number" name="CI" class="form-control" value="{{$postulante->CI}}" placeholder="77777777" required>
        </div>
        <div class="form-group">
        <label form="Nombre">NOMBRE</label>
        <input type="text" name="Nombre" class="form-control"value="{{$postulante->Nombre}}" placeholder="juan" required>
        </div>
        <div class="form-group">
        <label form="Correo">CORREO</label>
        <input type="email" name="Correo" class="form-control"value="{{$postulante->Correo}}" placeholder="ejemplo@outlook.com" required>
        </div>
        <div class="form-group">
        <label form="NroTelefono">TELEFONO</label>
        <input type="number" name="NroTelefono" class="form-control"value="{{$postulante->NroTelefono}}" placeholder="6687875" required>
        </div>
        <div class="form-group">
        <label form="Descripcion">DESCRIPCION</label>
        <input type="text" name="Descripcion" class="form-control"value="{{$postulante->Descripcion}}" placeholder="detalles" required>
        </div>
        <div class="form-group">
        <label form="Curriculum">CURRICULUM</label>
        <input type="file" name="Curriculum" class="form-control">
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