@extends('plantilla.main')
@section('titulo')
 POSTULANTES RECLUTADOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR POSTULANTE RECLUTADO </h3>            
             
        
        {!!Form::model($postreclut,['method'=>'PATCH','route'=>['postreclut.update',$postreclut->Id] ])!!}
        {{Form::token()}}

         <div class="form-group">
        <label form="IdPostulante">POSTULANTE</label>
        <select name="IdPostulante" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($postulante as $c)
          @if($c->Id==$postreclut->IdPostulante)
          <option value="{{$c->Id}}" selected>{{$c->CI.' - '.$c->Nombre.' - '.$c->Correo}}</option> 
          @else
          <option value="{{$c->Id}}">{{$c->CI.' - '.$c->Nombre.' - '.$c->Correo}}</option> 
          @endif

       @endforeach
        </select>   
        </div>

        <div class="form-group">
        <label form="IdReclutamiento">RECLUTAMIENTO</label>
        <select name="IdReclutamiento" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($reclutamiento as $c)
          @if($c->Id==$postreclut->IdReclutamiento)
          <option value="{{$c->Id}}" selected>{{$c->NombrePuesto.' - '.$c->DescripcionPuesto}}</option>
          @else
          <option value="{{$c->Id}}">{{$c->NombrePuesto.' - '.$c->DescripcionPuesto}}</option>
          @endif 

       @endforeach
        </select>   
        </div>

        <div class="form-group">
        <label form="FechaSolicitud">FECHA DE SOLICITUD</label>
        <input type="date" name="FechaSolicitud" class="form-control" value="{{$postreclut->FechaSolicitud}}" placeholder="19/12/2019" required>
        </div>

         <div class="form-group">
        <label form="HoraSolicitud">FECHA DE SOLICITUD</label>
        <input type="time" name="HoraSolicitud" class="form-control" value="{{$postreclut->HoraSolicitud}}" placeholder="15-55-am" required>
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