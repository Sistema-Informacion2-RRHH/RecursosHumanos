
@extends('plantilla.main')

@section('titulo')
 POSTULANTES
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div align="center">

           <h3> LISTADO DE POSTULANTES </h3>            
             
        </div>

    </div>

    <div class="row">

        <div >
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>Id</th>
        				<th>CI</th>
                        <th>NOMBRE</th>
                        <th>CORREO</th>
                        <th>TELEFONO</th>
                        <th>DESCRIPCION</th>
                        <th>CURRICULUM</th>
        				<th>ACCION</th>
        			</thead>

        			@foreach($postulante as $t)
        			<tr>
        			 <td>{{$t->Id}}</td>	
        			 <td>{{$t->CI}}</td>	
                      <td>{{$t->Nombre}}</td>
                      <td>{{$t->Correo}}</td>
                      <td>{{$t->NroTelefono}}</td>
                      <td>{{$t->Descripcion}}</td>
                      <td>{{$t->Curriculum}}</td>
        			 <td>
        			<a href="{{URL::action('PostulanteController@edit',$t->Id)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->Id}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.postulante.modal')
        			@endforeach  

        		</table>
                <div align="left">
                  <a href="postulante/create"> <button class="btn btn-success"> NUEVO</button></a>
                </div>
        	</div>
        	{!!$postulante->render()!!}
       </div>

    </div>

 </div>

@endsection

