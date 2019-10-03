@extends('plantilla.main')
@section('titulo')
 PLANILLA DE EVALUACION
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR PLANILLA DE EVALUACION </h3>            
             
        
        {!!Form::model($planillaevaluacion,['method'=>'PATCH','route'=>['planillaevaluacion.update',$planillaevaluacion->CodigoEvaluacion] ])!!}
        {{Form::token()}}

   
        <div class="form-group">
            <label form="IdEntrevista"> ENTREVISTA </label>
            <input type="number" name="IdEntrevista" class="form-control" value=" {{$planillaevaluacion->IdEntrevista}}"  placeholder="" required>
        </div>
        <div class="form-group">
            <label form="IdPrueba"> PRUEBA </label>
            <input type="number" name="IdPrueba" class="form-control" value=" {{$planillaevaluacion->IdPrueba}}" placeholder="" required>
        </div>
        <div class="form-group">
            <label form="CodigoEvaluacion"> CODIGO DE EVALUACION </label>
            <input type="number" name="CodigoEvaluacion" class="form-control" value=" {{$planillaevaluacion->CodigoEvaluacion}}" placeholder="" required>
        </div>
        <div class="form-group">
            <label form="FormacionAcademica"> FORMACION ACADEMICA </label>
            <input type="number" name="FormacionAcademica" class="form-control" value=" {{$planillaevaluacion->FormacionAcademica}}" placeholder="" required>
        </div>
        <div class="form-group">
            <label form="ExperienciaPuesto"> EXPERIENCIA A PUESTO </label>
            <input type="number" name="ExperienciaPuesto" class="form-control" value=" {{$planillaevaluacion->ExperienciaPuesto}}" placeholder="" required>
        </div>

        <div class="form-group">
            <label form="ExperienciaProfesional"> EXPERIENCIA PROFESIONAL </label>
            <input type="number" name="ExperienciaProfesional" class="form-control" value=" {{$planillaevaluacion->ExperienciaProfesional}}" placeholder="" required>
        </div>

        <div class="form-group">
            <label form="Actitud"> ACTITUD </label>
            <input type="number" name="Actitud" class="form-control" value=" {{$planillaevaluacion->Actitud}}" placeholder="" required>
        </div>

        <div class="form-group">
            <label form="capacidadAnalisis"> CAPACIDAD DE ANALISIS </label>
            <input type="number" name="capacidadAnalisis" class="form-control" value=" {{$planillaevaluacion->capacidadAnalisis}}" placeholder="" required>
        </div>

        <div class="form-group">
            <label form="Competitividad"> COMPETITIVIDAD </label>
            <input type="number" name="Competitividad" class="form-control" value=" {{$planillaevaluacion->Competitividad}}" placeholder="" required>
        </div>

        <div class="form-group">
            <label form="PuntuacionTotal"> PUNTUACION TOTAL </label>
            <input type="number" name="PuntuacionTotal" class="form-control" value=" {{$planillaevaluacion->PuntuacionTotal}}" placeholder="" required>
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