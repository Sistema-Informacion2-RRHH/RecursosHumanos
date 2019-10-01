
@extends('plantilla.main')

@section('titulo')
 EMPLEADOS
@endsection

@section('contenido')

 <div class="container-fluid">

            
           <h3 align="center"> LISTADO DE EMPLEADOS </h3>               
        	
        	<div class="table-responsive">

        		<table class="table table-striped table-bordered table=condensed table-hover" >
        			<thead >
        				<th>ID</th>
        				<th>CI</th>
                        <th>NOMBRE</th>
                        <th>DIRECCION</th>
                        <th>EMAIL</th>
                        <th>SEXO</th>
                        <th>TELEFONO</th>
                        <th>MOVIL</th>
                        <th>PROFESION</th>
                        <th>CARGO</th>
                        <th>DEPARTAMENTO</th>
        				<th>ACCION.. <a href="empleado/create"> <button class="btn btn-success"> NUEVO</button></a></th>
        			</thead>

        			@foreach($empleado as $t)
        			<tr>
        			 <td>{{$t->id}}</td>	
        			 <td>{{$t->CI}}</td>	
                     <td>{{$t->Nombre}}</td>    
                     <td>{{$t->Direccion}}</td> 
                     <td>{{$t->Email}}</td>    
                     <td>{{$t->Sexo}}</td> 
                     <td>{{$t->Telefono_tra}}</td>    
                     <td>{{$t->movil_tra}}</td> 
                     <td>{{$t->Profesion}}</td>    
                     <td>{{$t->IdCargo}}</td> 
                     <td>{{$t->CodDepartamento}}</td> 
        			 <td>
        			<a href="{{URL::action('EmpleadoController@edit',$t->id)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->id}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.empleado.modal')
        			@endforeach 

        		</table>
        	</div>
            <div align="center">{!!$empleado->render()!!}</div>
        	
 </div>

@endsection

