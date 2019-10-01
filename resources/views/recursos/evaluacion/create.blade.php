@extends('plantilla.main')
@section('titulo')
 EVALUACION
@endsection

@section('contenido')
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">

        <h3> NUEVA EVALUACION </h3>            
             
        {!!Form::open( array('url'=>'evaluacion','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}

        <div class="form-group">

        <label form="Codigo">CODIGO</label>
        <input type="number" name="Codigo" class="form-control" value="0" placeholder="1">
      
        </div>

        <div class="form-group">
        <label form="FechaInicio">FECHA INICIO</label>
        <input type="date" name="FechaInicio" class="form-control" >
        </div>

        <div class="form-group">
        <label form="FechaFin">FECHA FIN</label>
        <input type="date" name="FechaFin" class="form-control" placeholder="continuo">
        </div>

        
        <div class="form-group">
                <label form="HoraInicio">HORA INICIO</label>
                <input type="time" name="HoraInicio" class="form-control" placeholder="continuo">
        </div>

        <div class="form-group">
        <label form="HoraFin">HORA FIN</label>
        <input type="time" name="HoraFin" class="form-control" placeholder="continuo">
        </div>
                
        <div class="form-group">
        <label form="Descripcion">DESCRIPCION</label>
        <input type="text" name="Descripcion" class="form-control" placeholder="coloque aqui la descripcion">
        </div>

        <div class="form-group">
        <label form="TipoEvaluacion">TIPOEVALUACION</label>
        <input type="text" name="TipoEvaluacion" class="form-control" placeholder="0">
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