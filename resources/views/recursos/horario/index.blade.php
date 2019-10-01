
@extends('plantilla.main')

@section('titulo')
 HORARIOS
@endsection

@section('contenido')

 <div class="container-fluid">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> LISTADO DE HORARIOS </h3>            
             
        </div>

    </div>

    <div class="row" >

        <div class="col-md-8 col-md-offset-2">
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>ID</th>
        				<th>DIAS</th>
                        <th>HORA DE ENTRADA AM</th>
                        <th>HORA DE SALIDA AM</th>
                        <th>HORA DE ENTRADA PM</th>
                        <th>HORA DE SALIDA PM</th>
                        <th>HORA DE ENTRADA SABADO</th>
                        <th>HORA DE SALIDA SABADO</th>
        				<th>ACCION.. <a href="horario/create"> <button class="btn btn-success"> NUEVO</button></a></th>
        			</thead>

        			@foreach($horario as $t)
        			<tr>
        			 <td>{{$t->id}}</td>	
        			 <td>{{$t->diaSemana}}</td>	
                     <td>{{$t->HoraEntradaM}}</td>    
                     <td>{{$t->HoraSalidaM}}</td> 
                     <td>{{$t->HoraEntradaT}}</td>    
                     <td>{{$t->HoraSalidaT}}</td> 
                     <td>{{$t->HoraSabadoE}}</td>    
                     <td>{{$t->HoraSabadoS}}</td> 
        			 <td>
        			<a href="{{URL::action('HorarioController@edit',$t->id)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->id}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.horario.modal')
        			@endforeach  

        		</table>
        	</div>
        	{!!$horario->render()!!}
       </div>

    </div>

 </div>

@endsection

