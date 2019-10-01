
@extends('plantilla.main')

@section('titulo')
 RECLUTAMIENTO
@endsection

@section('contenido')

 <div class="container-fluid">

    <div class="row">

        <div align="center">

           <h3> LISTADO DE RECLUTAMIENTO </h3>            
             
        </div>

    </div>

    <div class="row">

        <div >
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>ID</th>
        				<th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>LUGAR</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th>HORA INICIO</th>
                        <th>HORA FIN</th>
                        <th>NRO DE EMPLEADOS</th>
                        <th>TIPO</th>
                        <th>JEFE DEL DEPARTAMENTO</th>
        				<th>ACCION</a></th>
        			</thead>

        			@foreach($reclutamiento as $t)
        			<tr>
        			 <td>{{$t->Id}}</td>	
        			 <td>{{$t->NombrePuesto}}</td>	
                      <td>{{$t->DescripcionPuesto}}</td>
                      <td>{{$t->LugarTrabajo}}</td>
                      <td>{{$t->FechaInicioPublic}}</td>
                      <td>{{$t->FechaFinPublic}}</td>
                      <td>{{$t->HoraInicioPublic}}</td>
                      <td>{{$t->HoraFinPublic}}</td>
                      <td>{{$t->NroEmpleadosEsperados}}</td>
                      <td>{{$t->TipoPostulante}}</td>
                      <td>{{$t->jefe->Descripcion}}</td>
        			 <td>
        			<a href="{{URL::action('ReclutamientoController@edit',$t->Id)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->Id}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.reclutamiento.modal')
        			@endforeach  

        		</table>
                <div align="left">
                <a href="reclutamiento/create"> <button class="btn btn-success"> NUEVO</button>
                </div>
        	</div>
        	{!!$reclutamiento->render()!!}
       </div>

    </div>

 </div>

@endsection

