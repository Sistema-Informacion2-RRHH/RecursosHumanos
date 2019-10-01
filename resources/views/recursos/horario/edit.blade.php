@extends('plantilla.main')

@section('titulo')
 horarioS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> Editar horario {{$horario->diaSemana}}</h3>            
             
        
        {!!Form::model($horario,['method'=>'PATCH','route'=>['horario.update',$horario->id] ])!!}
        {{Form::token()}}
        
        <div class="form-group">

        <label form="diaSemana">DIAS</label>
        <input name="diaSemana" type="text" required="required" class="form-control" value="{{$horario->diaSemana}}" placeholder="continuo">
      
        </div>

        <div class="form-group">

        <label form="HoraEntradaM">HORA DE ENTRADA AM</label>
        <input name="HoraEntradaM" type="time" required="required" value="{{$horario->HoraEntradaM}}" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="HoraSalidaM">HORA DE SALIDA AM</label>
        <input name="HoraSalidaM" type="time" required="required" value="{{$horario->HoraSalidaM}}" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="HoraEntradaT">HORA DE ENTRADA PM</label>
        <input name="HoraEntradaT" type="time" required="required" value="{{$horario->HoraEntradaT}}" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="HoraSalidaT">HORA DE SALIDA PM</label>
        <input name="HoraSalidaT" type="time" required="required" value="{{$horario->HoraSalidaT}}" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="HoraSabadoE">HORA DE ENTRADA SABADO</label>
        <input name="HoraSabadoE" type="time" required="required" value="{{$horario->HoraSabadoE}}" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="HoraSabadoS">HORA DE SALIDA SABADO</label>
        <input name="HoraSabadoS" type="time" required="required" value="{{$horario->HoraSabadoS}}" class="form-control" >
      
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