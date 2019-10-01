
@extends('plantilla.main')

@section('titulo')
 SEGUROS
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> LISTADO DE LOS SEGUROS </h3>            
             
        </div>

    </div>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>CODIGO</th>
                        <th>NOMBRE DE LA ASEGURADORA</th>
                        <th>TELEFONO</th>
                        <th>DESCRIPCION</th>
        				<th>ACCION</th>
        			</thead>

        			@foreach($seguro as $t)
        			<tr>
        			 <td>{{$t->Codigo}}</td>	
        			 <td>{{$t->NombreAseguradora}}</td>
                     <td>{{$t->Telefono}}</td>
                     <td>{{$t->Descripcion}}</td>	  
        			 <td>
        			<a href="{{URL::action('SeguroController@edit',$t->Codigo)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->Codigo}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.seguro.modal')
        			@endforeach  

        		</table>
                <div align="left">
                <a href="seguro/create"> <button class="btn btn-success"> NUEVO</button></a>
                </div>
        	</div>
        	{!!$seguro->render()!!}
       </div>

    </div>

 </div>

@endsection

