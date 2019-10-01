
@extends('plantilla.main')

@section('titulo')
 SELECCION
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div align="center">

           <h3> LISTADO DE SELECCION </h3>            
             
        </div>

    </div>

    <div class="row">

        <div >
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>ID</th>
        				<th>RECOMENDACION</th>
                        <th>PUNTUACION</th>
                        <th>RECLUTAMIENTO</th>
                        <th>POSTULANTE</th>
        				<th>ACCION</th>
        			</thead>

        			@foreach($seleccion as $t)
        			<tr>
        			 <td>{{$t->Id}}</td>	
        			 <td>{{$t->Recomendacion}}</td>	
                      <td>{{$t->Puntuacion}}</td>
                      <td>{{$t->reclutamiento->NombrePuesto}}</td>
                      <td>{{$t->postulante->Nombre}}</td>
        			 <td>
        			<a href="{{URL::action('SeleccionController@edit',$t->Id)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->Id}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.seleccion.modal')
        			@endforeach  

        		</table>
                <div align="left">
                    <a href="seleccion/create"> <button class="btn btn-success"> NUEVO</button></a>
                </div>
        	</div>
        	{!!$seleccion->render()!!}
       </div>

    </div>

 </div>

@endsection

