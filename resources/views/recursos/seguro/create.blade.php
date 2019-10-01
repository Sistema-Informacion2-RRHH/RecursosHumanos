@extends('plantilla.main')
@section('titulo')
 SEGUROS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVO SEGURO </h3>            
             
        
        {!!Form::open( array('url'=>'seguro','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}

        <div class="form-group">
        <label form="Codigo">CODIGO</label>
        <input type="number" name="Codigo" class="form-control" value="0" placeholder="0">   
        </div>

        <div class="form-group">
        <label form="NombreAseguradora">NOMBRE DE LA ASEGURADORA</label>
        <input type="text" name="NombreAseguradora" class="form-control"  placeholder="buen samaritanno">   
        </div>

        <div class="form-group">
        <label form="Telefono">TELEFONO</label>
        <input type="number" name="Telefono" class="form-control"  placeholder="3333333">   
        </div>

        <div class="form-group">
        <label form="Descripcion">DESCRIPCION</label>
        <input type="text" name="Descripcion" class="form-control"  placeholder="detalle de la empresa">   
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