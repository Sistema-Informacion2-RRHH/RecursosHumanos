@extends('plantilla.main')
@section('titulo')
 TURNOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR TURNO {{$turno->tipo_turno}}</h3>            
             
        
        {!!Form::model($turno,['method'=>'PATCH','route'=>['turno.update',$turno->id] ])!!}
        {{Form::token()}}

        <div class="form-group">

        <label form="tipo_turno">TIPO DE TURNO</label>
        <input type="text" name="tipo_turno" class="form-control" value="{{$turno->tipo_turno}}" placeholder="continuo"> </div>




        <div class="form-group">
        <label form="IdHorario">CARGO</label>
        <select name="IdHorario" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($horario as $c)

         @if($c->id==$turno->IdHorario) 
          <option value="{{$c->id}}" selected>{{$c->diaSemana}}</option>
         @else
          <option value="{{$c->id}}">{{$c->diaSemana}}</option> 
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