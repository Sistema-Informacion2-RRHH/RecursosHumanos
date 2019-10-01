@extends('plantilla.main')
@section('titulo')
 HORARIOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVO HORARIO </h3>            
             
        
        {!!Form::open( array('url'=>'horario','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}

        <div class="form-group">

        <label form="id">ID</label>
        <input type="text" name="id" class="form-control" placeholder="1">
      
        </div>

        <div class="form-group">

        <label form="diaSemana">DIAS</label>
        <input name="diaSemana" type="text" required="required" class="form-control" placeholder="continuo">
      
        </div>

        <div class="form-group">

        <label form="HoraEntradaM">HORA DE ENTRADA AM</label>
        <input name="HoraEntradaM" type="time" required="required" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="HoraSalidaM">HORA DE SALIDA AM</label>
        <input name="HoraSalidaM" type="time" required="required" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="HoraEntradaT">HORA DE ENTRADA PM</label>
        <input name="HoraEntradaT" type="time" required="required" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="HoraSalidaT">HORA DE SALIDA PM</label>
        <input name="HoraSalidaT" type="time" required="required" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="HoraSabadoE">HORA DE ENTRADA SABADO</label>
        <input name="HoraSabadoE" type="time" required="required" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="HoraSabadoS">HORA DE SALIDA SABADO</label>
        <input name="HoraSabadoS" type="time" required="required" class="form-control" >
      
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