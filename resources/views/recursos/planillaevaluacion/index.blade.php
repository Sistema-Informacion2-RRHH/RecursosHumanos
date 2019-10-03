@extends('plantilla.main')

@section('titulo')
PLANILLA EVALUACION
@endsection

@section('contenido')

<div class="container">
    <div class="row">
        <div align="center">
            <h3> LISTADO DE PLANILLA EVALUACION </h3>
        </div>
    </div>
    <div class="row">
        <div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table=condensed table-hover">
                    <thead>
                        <th>ID ENTREVISTA</th>
                        <th>ID PRUEBA</th>
                        <th>CODIGO EVALUACION</th>
                        <th>FORMACION ACADEMICA</th>
                        <th>EXPERIENCIA PUESTO</th>
                        <th>EXPERIENCIA PROFESIONAL</th>
                        <th>ACTITUD</th>
                        <th>CAPACIDAD ANALISIS</th>
                        <th>COMPETITIVIDAD</th>
                        <th>PUNTUACION TOTAL</th>
                        <th>ACCION</a></th>
                    </thead>

                    @foreach($planillaevaluacion as $t)
                    <tr>
                        <td>{{$t->IdEntrevista}}</td>
                        <td>{{$t->IdPrueba}}</td>
                        <td>{{$t->CodigoEvaluacion}}</td>
                        <td>{{$t->FormacionAcademica}}</td>
                        <td>{{$t->ExperienciaPuesto}}</td>
                        <td>{{$t->ExperienciaProfesional}}</td>
                        <td>{{$t->Actitud}}</td>
                        <td>{{$t->CapacidadAnalisis}}</td>
                        <td>{{$t->Competitividad}}</td>
                        <td>{{$t->PuntuacionTotal}}</td>
                        <td>
                            <a href="{{URL::action('PlanillaEvaluacionController@edit',$t->CodigoEvaluacion)}}"><button
                                    class="btn btn-info">EDITAR</button></a>
                            <a href="" data-target="#modal-delete-{{$t->CodigoEvaluacion}}" data-toggle="modal"><button
                                    class="btn btn-danger">ELIMINAR</button></a>
                        </td>
                    </tr>
                    @endforeach

                </table>
                <div align="left">
                    <a href="planillaevaluacion/create"> <button class="btn btn-success"> NUEVO</button></a>
                </div>
            </div>
            {!!$planillaevaluacion->render()!!}
        </div>

    </div>

</div>

@endsection