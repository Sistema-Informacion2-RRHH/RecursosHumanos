
@extends('plantilla.main')

@section('titulo')
 CONTRATOS
@endsection

@section('contenido')

 <div class="container-fluid">

    

        <div class="col-md-8 col-md-offset-2">

           <h3> LISTADO DE CONTRATOS </h3>            
             
        </div>

    

  

        <div class="col-md-8 col-md-offset-2">
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>CODIGO</th>
        				<th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th>DESCRIPCION</th>
                        <th>IDENTREVISTA</th>
                        <th>IDPRUEBA</th>
                        <th>CODIGOEVALUACION</th>
        				<th>ACCION.. <a href="contrato/create"> <button class="btn btn-success"> NUEVO</button></a></th>
        			</thead>

        			@foreach($contrato as $t)
        			<tr>
        			 <td>{{$t->Codigo}}</td>	
        			 <td>{{$t->FechaInicio}}</td>
                     <td>{{$t->FechaFin}}</td>
                     <td>{{$t->Descripcion}}</td>
                     <td>{{$t->IdEntrevista}}</td>	
                     <td>{{$t->IdPrueba}}</td>
                    <td>{{$t->CodigoEvaluacion}}</td> 
                             			 <td>
        			<a href="{{URL::action('ContratoController@edit',$t->Codigo)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->Codigo}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.contrato.modal')
        			@endforeach  

        		</table>
        	</div>
        	{!!$contrato->render()!!}
       </div>


 </div>

@endsection

