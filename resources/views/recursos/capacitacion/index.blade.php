
@extends('plantilla.main')

@section('titulo')
    CAPACITACION
@endsection

@section('contenido')

 <div class="container-fluid">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> LISTADO DE CAPACITACION </h3>
             
        </div>

    </div>

    <div class="row" >

        <div class="col-md-8 col-md-offset-2">
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>CODIGO</th>
        				<th>DESCRIPCION</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
        				<th>ACCION.. <a href="capacitacion/create"> <button class="btn btn-success"> NUEVO</button></a></th>
        			</thead>

        			@foreach($capacitacion as $t)
        			<tr>
        			 <td>{{$t->Codigo}}</td>
        			 <td>{{$t->Descripcion}}</td>
                     <td>{{$t->FechaInicio}}</td>
                     <td>{{$t->FechaFin}}</td>
        			 <td>
        			<a href="{{URL::action('CapacitacionController@edit',$t->Codigo)}}"><button class="btn btn-info">EDITAR</button></a>
        			<a href="" data-target="#modal-delete-{{$t->Codigo}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>
        			 </td>	
        			</tr>
                    @include('recursos.capacitacion.modal')
        			@endforeach  

        		</table>
        	</div>
        	{!!$capacitacion->render()!!}
       </div>

    </div>

 </div>

@endsection

