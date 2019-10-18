
@extends('plantilla.main')

@section('titulo')
 Depatamentos
@endsection

@section('contenido')

 <div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2" align="center">
           <h3> LISTADO DE DEPARTAMENTOS </h3>            
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>CODIGO</th>
        				<th>NOMBRE</th>
                        <th>CAPACITACION</th>
        				<th>ACCION</th>
        			</thead>

        			@foreach($departamento as $t)
        			<tr>
        			 <td>{{$t->Codigo}}</td>	
        			 <td>{{$t->Nombre}}</td>
                     <td>{{$t->NroEmpleado}}</td>	
        			 <td>
        			<a href="{{URL::action('DepartamentoController@edit',$t->Codigo)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->Codigo}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.departamento.modal')
        			@endforeach  

        		</table>
                <div align="left">
                <a href="departamento/create"> <button class="btn btn-success"> NUEVO</button></a>
                </div>
        	</div>
        	{!!$departamento->render()!!}
       </div>
    </div>
 </div>

@endsection

