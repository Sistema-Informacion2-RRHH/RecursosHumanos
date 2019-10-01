
@extends('plantilla.main')

@section('titulo')
 PERIODO PRUEBA
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div align="center">

           <h3> LISTADO DE PERIODO DE PRUEBA </h3>            
             
        </div>

    </div>

    <div class="row">

        <div >
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>ENTREVISTA</th>
        				<th>PRUEBA</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th>HORA</th>
        				<th>ACCION</th>
        			</thead>

        			@foreach($periodoprueba as $t)
        			<tr>
        			 <td>{{$t->entrevista->FechaInicio.' - '.$t->entrevista->FechaFin}}</td>	
        			 <td>{{$t->IdPrueba}}</td>	
                      <td>{{$t->FechaInicio}}</td>
                      <td>{{$t->FechaFin}}</td>
                      <td>{{$t->Hora}}</td>
        			 <td>
        			<a href="{{URL::action('PeriodoPruebaController@edit',$t->IdPrueba)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->IdPrueba}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.periodoprueba.modal')
        			@endforeach  

        		</table>
                <div align="left">
                    <a href="periodoprueba/create"> <button class="btn btn-success"> NUEVO</button></a>
                </div>
        	</div>
        	{!!$periodoprueba->render()!!}
       </div>

    </div>

 </div>

@endsection

