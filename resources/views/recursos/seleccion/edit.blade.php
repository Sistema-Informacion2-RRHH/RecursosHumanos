@extends('plantilla.main')
@section('titulo')
 SELECCION
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR SELECCION </h3>                  
        
    {!!Form::model($seleccion,['method'=>'PATCH','route'=>['seleccion.update',$seleccion->Id] ])!!}
        {{Form::token()}}

        <div class="form-group">
        <label form="Recomendacion">RECOMENDACION</label>
        <input type="text" name="Recomendacion" class="form-control" value="{{$seleccion->Recomendacion}}" placeholder="juan" required>
        </div>
        <div class="form-group">
        <label form="Puntuacion">PUNTUACION</label>
        <input type="number" name="Puntuacion" class="form-control" value="{{$seleccion->Puntuacion}}" placeholder="0" required>
        </div>

      <div class="form-group">
        <label form="id">POSTULANTES RECLUTADOS</label>
        <select name="id" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($postreclut as $c)

@if($c->IdReclutamiento == $seleccion->IdReclutamiento && $c->IdPostulante == $seleccion->IdPostulante)
          <option value="{{$c->Id}}" selected>{{$c->postulante->CI.' - '.$c->postulante->Nombre.' >> '.$c->reclutamiento->NombrePuesto}}</option> 
          @else
          <option value="{{$c->Id}}">{{$c->postulante->CI.' - '.$c->postulante->Nombre.' >> '.$c->reclutamiento->NombrePuesto}}</option>
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