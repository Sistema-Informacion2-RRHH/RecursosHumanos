@extends('plantilla.main')

@section('titulo')
EMPLEADOS
@endsection

@section('contenido')

<div class="container-fluid">


    <div class="row">
        <div class="col-md-8 col-md-offset-2" align="center">
            <h3 align="center"> LISTADO DE EMPLEADOS </h3>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">

            <table class="table table-striped table-bordered table=condensed table-hover">
                <thead>
                    <th>ID</th>
                    <th>CI</th>
                    <th>NOMBRE</th>
                    <th>DIRECCION</th>
                    <th>CORREO</th>
                    <th>SEXO</th>
                    <th>PROFESION</th>
                    <th>CARGO</th>
                    <th>INFO PRIVADA</th>
                    <th>DEPARTAMENTO</th>
                    <th>JEFE DPTO</th>
                    <th>CONTRATO</th>
                    <th>ACCION</th>
                </thead>

                @foreach($empleado as $t)
                <tr>
                    <td>{{$t->Id}}</td>
                    <td>{{$t->CI}}</td>
                    <td>{{$t->Nombre}}</td>
                    <td>{{$t->Direccion}}</td>
                    <td>{{$t->Correo}}</td>
                    <td>{{$t->Sexo}}</td>
                    <td>{{$t->Profesion}}</td>
                    <td>{{$t->IdCargo}}</td>
                    <td>{{$t->IdInformPrivada}}</td>
                    <td>{{$t->CodigoDpto}}</td>
                    <td>{{$t->CodigoJefeDpto}}</td>
                    <td>{{$t->CodigoContrato}}</td>
                    <td>
                        <a href="{{URL::action('EmpleadoController@edit',$t->id)}}"><button
                                class="btn btn-info">EDITAR</button></a>
                        <a href="" data-target="#modal-delete-{{$t->id}}" data-toggle="modal"><button
                                class="btn btn-danger">ELIMINAR</button></a>
                    </td>
                </tr>
                @include('recursos.empleado.modal')
                @endforeach

            </table>
            <div align="left">
                <a href="empleado/create"> <button class="btn btn-success"> NUEVO</button></a>
            </div>
        </div>
        {!!$empleado->render()!!}
    </div>
</div>

@endsection