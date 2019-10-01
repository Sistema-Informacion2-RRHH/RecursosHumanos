@extends('plantilla.main')
@section('titulo')
 periodo de prueba
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVO PERIODO DE PRUEBA </h3>            

        {!!Form::open( array('url'=>'periodoprueba','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!} 

        <div class="form-group">
        <label form="IdEntrevista">ENTREVISTA</label>
        <select name="IdEntrevista" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($entrevista as $c)

          <option value="{{$c->Id}}">{{$c->FechaInicio.' - '.$c->FechaFin.' > '.$c->HoraInicio.' - '.$c->HoraFin}}</option> 

       @endforeach
        </select>   
        </div>

        <div class="form-group">
        <label form="FechaInicio">FECHA INICIO</label>
        <input type="date" name="FechaInicio" class="form-control" placeholder="juan" required>
        </div>
        <div class="form-group">
        <label form="FechaFin">FECHA FIN</label>
        <input type="date" name="FechaFin" class="form-control" placeholder="0" required>
        </div>

        <div class="form-group">
        <label form="Hora">HORA</label>
        <input type="time" name="Hora" class="form-control" placeholder="0" required>
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