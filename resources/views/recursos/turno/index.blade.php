
@extends('plantilla.main')

@section('titulo')
 TURNOS
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> LISTADO DE TURNOS </h3>            
             
        </div>

    </div>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>ID</th>
        				<th>TIPO</th>
                        <th>HORARIO</th>
        				<th>ACCION.. <a href="turno/create"> <button class="btn btn-success"> NUEVO</button></a></th>
        			</thead>

        			@foreach($turno as $t)
        			<tr>
        			 <td>{{$t->id}}</td>	
        			 <td>{{$t->tipo_turno}}</td>	
                      <td>{{$t->IdHorario}}</td>
        			 <td>
        			<a href="{{URL::action('TurnoController@edit',$t->id)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->id}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.turno.modal')
        			@endforeach  

        		</table>
        	</div>
        	{!!$turno->render()!!}
       </div>

    </div>

 </div>

@endsection

