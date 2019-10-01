
@extends('plantilla.main')

@section('titulo')
 BITACORA
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> BITACORA DEL SISTEMA </h3>            
             
        </div>

    </div>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
        	
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			<thead>
        				<th>ID</th>
        				<th>USUARIO</th>
                        <th>ROL</th>
                        <th>RECURSO</th>
                        <th>ATRIBUCION</th>
        			</thead>

        			@foreach($bitacora as $t)
        			<tr>
        			 <td>{{$t->Id}}</td>                    
                     <td>{{$t->Usuario}}</td>
                     <td>{{$t->Rol}}</td>   
                     <td>{{$t->Recurso}}</td> 
                     <td>{{$t->Atribucion}}</td>    
        			</tr>
        			@endforeach  

        		</table>
        	</div>
        	
       </div>

    </div>

 </div>

@endsection

