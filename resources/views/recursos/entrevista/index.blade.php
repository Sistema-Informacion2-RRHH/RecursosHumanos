@extends('plantilla.main')

@section('titulo')
ENTREVISTA
@endsection

@section('contenido')

<div class="container-fluid">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h3> LISTADO DE ENTREVISTAS </h3>

        </div>

    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table=condensed table-hover">
            <thead>
                <th>ID</th>
                <th>FECHA INICIO</th>
                <th>FECHA FIN</th>
                <th>HORA INICIO</th>
                <th>HORA FIN</th>
                <th>SALARIO ESPERADO</th>
                <th>SALARIO PROPUESTO</th>
                <th>DISPONIBILIDAD DE TIEMPO</th>
                <th>JEFE DE DEPARTAMENTO</th>
                <th>SELECCION</th>
                <th>ACCION</th>
            </thead>

            @foreach($entrevista as $t)
            <tr>
                <td>{{$t->Id}}</td>
                <td>{{$t->FechaInicio}}</td>
                <td>{{$t->FechaFin}}</td>
                <td>{{$t->HoraInicio}}</td>
                <td>{{$t->HoraFin}}</td>
                <td>{{$t->SalarioEsperado}}</td>
                <td>{{$t->SalarioPropuesto}}</td>
                <td>{{$t->DisponibilidadTiempo}}</td>
                <td>{{$t->jefedpto->Descripcion}}</td>
                <td>{{$t->seleccion->Recomendacion}}</td>
                <td>
                    <a href="{{URL::action('EntrevistaController@edit',$t->Id)}}"><button
                            class="btn btn-info">EDITAR</button></a>
                    <a href="" data-target="#modal-delete-{{$t->Id}}" data-toggle="modal"><button
                            class="btn btn-danger">ELIMINAR</button></a>
                </td>
            </tr>
            @include('recursos.entrevista.modal')
            @endforeach

        </table>
        <div align="left">
            <a href="entrevista/create"> <button class="btn btn-success"> NUEVO</button></a>
        </div>
    </div>
    {!!$entrevista->render()!!}


</div>

@endsection