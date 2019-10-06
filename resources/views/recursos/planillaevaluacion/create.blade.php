@extends('plantilla.main')
@section('titulo')
PLANILLA DE EVALUACION
@endsection

@section('contenido')


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h3> NUEVA PLANILLA DE EVALUACION </h3>

            {!!Form::open( array('url'=>'planillaevaluacion','method'=>'POST','autocomplete'=>'off') )!!}
            {!!Form::token()!!}

            <div class="form-group">
                <label form="IdEntrevista"> ENTREVISTA </label>
                <input type="number" name="IdEntrevista" class="form-control" placeholder="" required>
            </div>
            <div class="form-group">
                <label form="IdPrueba"> PRUEBA </label>
                <input type="number" name="IdPrueba" class="form-control" placeholder="0" required>
            </div>

            <div class="form-group">
                <label form="CodigoEvaluacion"> CODIGO DE EVALUACION </label>
                <input type="number" name="CodigoEvaluacion" class="form-control" placeholder="" required>
            </div>
            <div class="form-group">
                <label form="FormacionAcademica"> FORMACION ACADEMICA </label>
                <input type="number" name="FormacionAcademica" class="form-control" placeholder="" required>
            </div>
            <div class="form-group">
                <label form="ExperienciPuesto"> EXPERIENCIA A PUESTO </label>
                <input type="number" name="ExperienciPuesto" class="form-control" placeholder="0" required>
            </div>

            <div class="form-group">
                <label form="ExperienciaProfesional"> EXPERIENCIA PROFESIONAL </label>
                <input type="number" name="ExperienciaProfesional" class="form-control" placeholder="0" required>
            </div>

            <div class="form-group">
                <label form="Actitud"> ACTITUD </label>
                <input type="number" name="Actitud" class="form-control" placeholder="0" required>
            </div>

            <div class="form-group">
                <label form="capacidadAnalisis"> CAPACIDAD DE ANALISIS </label>
                <input type="number" name="capacidadAnalisis" class="form-control" placeholder="0" required>
            </div>

            <div class="form-group">
                <label form="Competitividad"> COMPETITIVIDAD </label>
                <input type="number" name="Competitividad" class="form-control" placeholder="0" required>
            </div>

            <div class="form-group">
                <label form="PuntuacionTotal"> PUNTUACION TOTAL </label>
                <input type="number" name="PuntuacionTotal" class="form-control" placeholder="0" required>
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