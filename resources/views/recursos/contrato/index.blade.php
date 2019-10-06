@extends('plantilla.main')

@section('titulo')
CONTRATOS
@endsection

@section('contenido')

<div class="container">

    <div class="row">
        <div class="col-md-8">

            <h3> LISTADO DE CONTRATOS </h3>

        </div>

    </div>


    <div class="row">
        <div class="col-md-12 col-md-offset-0.5" align="center">
            <div align="left">
                <a href="contrato/create"> <button class="btn btn-success"> NUEVO</button></a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered table=condensed table-hover">
                    <thead>
                        <th>CODIGO</th>
                        <th>INICIO</th>
                        <th>FIN</th>
                        <th>TIPO</th>
                        <th>SALARIO</th>
                        <th>PAGO</th>
                        <th>PERIODO</th>
                        <th>LUGAR DE TRABAJO</th>
                        <th>ENTREVISTA</th>
                        <th>PRUEBA</th>
                        <th>CODIGO EVALUACION</th>
                        <th>ACCION</th>
                    </thead>

                    @foreach($contrato as $t)
                    <tr>
                        <td>{{$t->Codigo}}</td>
                        <td>{{$t->FechaInicio}}</td>
                        <td>{{$t->FechaFin}}</td>
                        <td>{{$t->tipo}}</td>
                        <td>{{$t->salario}}</td>
                        <td>{{$t->formadepago}}</td>
                        <td>{{$t->periodopago}}</td>
                        <td>{{$t->lugardetrabajo}}</td>
                        <td>{{$t->IdEntrevista}}</td>
                        <td>{{$t->IdPrueba}}</td>
                        <td>{{$t->CodigoEvaluacion}}</td>
                        <td>
                            <a href="{{URL::action('ContratoController@edit',$t->Codigo)}}"><button
                                    class="btn btn-info">EDITAR</button></a>
                            <a href="" data-target="#modal-delete-{{$t->Codigo}}" data-toggle="modal"><button
                                    class="btn btn-danger">ELIMINAR</button></a>
                        </td>
                    </tr>
                    @include('recursos.contrato.modal')
                    @endforeach

                </table>
            </div>
            {!!$contrato->render()!!}
        </div>


    </div>
</div>
@endsection