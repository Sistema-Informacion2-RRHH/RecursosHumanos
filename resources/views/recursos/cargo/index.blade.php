
@extends('plantilla.main')

@section('titulo')
 Cargos
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2" align="center">

           <h3> LISTADO DE CARGOS </h3>            
             
        </div>

    </div>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
        				<th>ACCION</th>
        			</thead>

        			@foreach($cargo as $t)
        			<tr>
        			 <td>{{$t->Id}}</td>	
        			 <td>{{$t->Nombre}}</td>
                     <td>{{$t->Descripcion}}</td>	  
        			 <td>
        			<a href="{{URL::action('CargoController@edit',$t->Id)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->Id}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.cargo.modal')
        			@endforeach  

        		</table>
                <div align="left">
                    <a href="cargo/create"> <button class="btn btn-success"> NUEVO</button></a>
                </div>    
        	</div>
        	{!!$cargo->render()!!}
       </div>

    </div>

 </div>

@endsection

