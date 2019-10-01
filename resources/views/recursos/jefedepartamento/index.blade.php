
@extends('plantilla.main')

@section('titulo')
 JEFES POR DEPARTAMENTO
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> LISTADO DE JEFES POR DEPARTAMENTO </h3>            
             
        </div>

    </div>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>CODIGO</th>
                        <th>E-MAIL</th>
                        <th>DESCRIPCION</th>
                        <th>DEPARTAMENTO</th>
        				<th>ACCION</th>
        			</thead>

        			@foreach($jefedepartamento as $t)
        			<tr>
        			 <td>{{$t->Codigo}}</td>	
        			 <td>{{$t->CorreoElectronico}}</td>
                     <td>{{$t->Descripcion}}</td>	
                     <td>{{$t->departamento->Nombre}}</td>     
        			 <td>
        			<a href="{{URL::action('JefeDepartamentoController@edit',$t->Codigo)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->Codigo}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.jefedepartamento.modal')
        			@endforeach  

        		</table>
                <div align="left">
                    <a href="jefedepartamento/create"> <button class="btn btn-success"> NUEVO</button></a>
                </div>    
        	</div>
        	{!!$jefedepartamento->render()!!}
       </div>

    </div>

 </div>

@endsection

