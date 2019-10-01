
@extends('plantilla.main')

@section('titulo')
 VACACION
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> LISTADO DE VACACIONES </h3>            
             
        </div>

    </div>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>ID</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
        				<th>ACCION</th>
        			</thead>

        			@foreach($vacacion as $t)
        			<tr>
        			 <td>{{$t->Id}}</td>	
        			 <td>{{$t->FechaInicio}}</td>
                     <td>{{$t->FechaFin}}</td>	  
        			 <td>
        			<a href="{{URL::action('VacacionController@edit',$t->Id)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->Id}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.vacacion.modal')
        			@endforeach  

        		</table>
                <div align="left">
                    <a href="vacacion/create"> <button class="btn btn-success"> NUEVO</button></a>
                </div>    
        	</div>
        	{!!$vacacion->render()!!}
       </div>

    </div>

 </div>

@endsection

