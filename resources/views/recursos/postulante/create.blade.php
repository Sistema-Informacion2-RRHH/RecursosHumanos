@extends('plantilla.main')
@section('titulo')
 POSTULANTES
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVO POSTULANTE </h3>            
             
        
        {!!Form::open( array('url'=>'postulante','method'=>'POST','files'=>true,'autocomplete'=>'off') )!!}
        {!!Form::token()!!}

        <div class="form-group">
        <label form="CI">CI</label>
        <input type="number" name="CI" class="form-control" placeholder="77777777" required>
        </div>
        <div class="form-group">
        <label form="Nombre">NOMBRE</label>
        <input type="text" name="Nombre" class="form-control" placeholder="juan" required>
        </div>
        <div class="form-group">
        <label form="Correo">CORREO</label>
        <input type="email" name="Correo" class="form-control" placeholder="ejemplo@outlook.com" required>
        </div>
        <div class="form-group">
        <label form="NroTelefono">TELEFONO</label>
        <input type="number" name="NroTelefono" class="form-control" placeholder="6687875" required>
        </div>
        <div class="form-group">
        <label form="Descripcion">DESCRIPCION</label>
        <input type="text" name="Descripcion" class="form-control" placeholder="detalles" required>
        </div>
        <div class="form-group">
        <label form="Curriculum">CURRICULUM</label>
        <input type="file" name="Curriculum" class="form-control" required>
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