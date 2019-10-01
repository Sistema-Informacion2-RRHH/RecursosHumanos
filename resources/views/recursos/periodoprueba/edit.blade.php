@extends('plantilla.main')
@section('titulo')
 PERIODO DE PRUEBA
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR PERIODO DE PRUEBA </h3>                  
        
    {!!Form::model($periodoprueba,['method'=>'PATCH','route'=>['periodoprueba.update',$periodoprueba->IdPrueba] ])!!}
        {{Form::token()}}

        <div class="form-group">
        <label form="IdEntrevista">ENTREVISTA</label>
        <select name="IdEntrevista" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($entrevista as $c)
          @if($c->Id==$periodoprueba->IdEntrevista)
          <option value="{{$c->Id}}" selected>{{$c->FechaInicio.' - '.$c->FechaFin.' > '.$c->HoraInicio.' - '.$c->HoraFin}}</option> 
          @else
          <option value="{{$c->Id}}">{{$c->FechaInicio.' - '.$c->FechaFin.' > '.$c->HoraInicio.' - '.$c->HoraFin}}</option>
          @endif

       @endforeach
        </select>   
        </div>

        <div class="form-group">
        <label form="FechaInicio">FECHA INICIO</label>
        <input type="date" name="FechaInicio" class="form-control" value="{{$periodoprueba->FechaInicio}}" placeholder="" required>
        </div>
        <div class="form-group">
        <label form="FechaFin">FECHA FIN</label>
        <input type="date" name="FechaFin" class="form-control" value="{{$periodoprueba->FechaFin}}" placeholder="0" required>
        </div>

        <div class="form-group">
        <label form="Hora">HORA</label>
        <input type="time" name="Hora" class="form-control" value="{{$periodoprueba->Hora}}" placeholder="0" required>
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