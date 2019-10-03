@extends('plantilla.main')
@section('titulo')
EVALUACION
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h3> EDITAR EVALUACION {{$evaluacion->Codigo}}</h3>


            {!!Form::model($evaluacion,['method'=>'PATCH','route'=>['evaluacion.update',$evaluacion->Codigo] ])!!}
            {{Form::token()}}


            <div class="form-group">
                <label form="FechaInicio">FECHA INICIO</label>
                <input type="date" name="FechaInicio" class="form-control" value="{{$evaluacion->FechaInicio}}">
            </div>

            <div class="form-group">
                <label form="FechaFin">FECHA FIN</label>
                <input type="date" name="FechaFin" class="form-control" value="{{$evaluacion->FechaFin}}">
            </div>

            <div class="form-group">
                <label form="HoraInicio">HORA INICIO</label>
                <input type="time" name="HoraInicio" class="form-control" value="{{$evaluacion->HoraInicio}}">
            </div>

            <div class="form-group">
                <label form="HoraFin">HORA FIN</label>
                <input type="time" name="HoraFin" class="form-control" value="{{$evaluacion->HoraFin}}">
            </div>

            
            <div class="form-group">
                <label form="Descripcion">DESCRIPCION</label>
                <input type="text" name="Descripcion" class="form-control" value="{{$evaluacion->Descripcion}}">
            </div>

            <div class="form-group">
                <label form="TipoEvaluacion">TIPO EVALUACION</label>
                <input type="text" name="TipoEvaluacion" class="form-control" value="{{$evaluacion->TipoEvaluacion}}">
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