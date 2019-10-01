
@extends('plantilla.main')

@section('titulo')
 INFORMACION PRIVADA
@endsection

@section('contenido')

 <div class="container-fluid">

   

        <div align="center">

           <h3>LISTADO DE INFORMACION PRIVADA </h3>            
             
        </div>


        <div align="center">
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>ID</th>
        				<th>NACIONALIDAD</th>
                        <th>ESTADO CIVIL</th>
                        <th>NRO HIJOS</th>
                        <th>CIUDAD</th>
                        <th>FECHA DE NACIMIENTO</th>
                        <th>NRO DE CUENTA BANCARIA</th>
                        <th>NOMBRE DEL CONTACTO DE EMERGENCIA</th>
                        <th>NRO DEL CONTACTO DE EMERGENCIA</th>    
						<th>PASAPORTE</th>
        				<th>ACCION</th>
        			</thead>

        			@foreach($informacionprivada as $t)
        			<tr>
        			 <td>{{$t->id}}</td>	
        			 <td>{{$t->Nacionalidad}}</td>	
                     <td>{{$t->EstadoCivil}}</td>    
                     <td>{{$t->NroHijos}}</td> 
                     <td>{{$t->Ciudad}}</td>    
                     <td>{{$t->FechaNacimiento}}</td> 
                     <td>{{$t->NroCuentaBancaria}}</td>    
                     <td>{{$t->NombreContactoEmergencia}}</td> 
                     <td>{{$t->NroContactoEmergencia}}</td>    
                     <td>{{$t->Pasaporte}}</td> 
        			 <td>
        			<a href="{{URL::action('InformacionPrivadaController@edit',$t->id)}}"><button class="btn btn-info">EDITAR</button></a>	
        			<a href="" data-target="#modal-delete-{{$t->id}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>	
        			 </td>	
        			</tr>
                    @include('recursos.informacionprivada.modal')
        			@endforeach  
                    
        		</table>
               <div align="left">
                <a href="informacionprivada/create"> <button class="btn btn-success"> NUEVO</button></a> 
               </div>
        	</div>
        	{!!$informacionprivada->render()!!}
       </div>
      
  

 </div>

@endsection

