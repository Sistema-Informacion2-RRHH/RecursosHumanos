
@extends('plantilla.main')

@section('titulo')
 PRIVILEGIOS
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> LISTADO DE PRIVILEGIOS </h3>            
             
        </div>

    </div>
    <br>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
        	
        	 @foreach($privilegio as $item)   
            <div class="table-responsive">
            
        		<table class="table table-striped table-bordered table=condensed table-hover">
        			
                    <thead>
        				<th>ROL</th>
                        <th>ACCION</th>	
        			</thead>
        			
        			<tr>
                     <td>{{$item['rol']}}</td>  
        			 <td>
                        <a href="{{URL::action('PrivilegioController@edit',$item['id'])}}"><button class="btn btn-info">EDITAR</button></a>
                        <a href="" data-target="#modal-delete-{{$item['id']}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>  
                    </td>		
        			</tr> 
                      @include('recursos.privilegio.modal')
                    <tr>
                        <td><b> RECURSO </b></td>
                        <td><b> ATRIBUCION  </b></td>
                    </tr>

                   
                    @foreach($item['admin'] as $cont)
                   
                       
                  
                  
                    <tr>
                     <td>{{$cont['recurso']}}</td>  
                     <td>
                     @foreach($cont['atribucion'] as $det)
                     <input type="checkbox" checked> {{$det.'  '}} 
                      @endforeach    
                     </td>
                            
                    </tr>
              
                     @endforeach

    
        		</table>
                <br>
                @endforeach 
                <a href="privilegio/create"> <button class="btn btn-success"> NUEVO</button></a>
                 
        	</div>
            <div><br></div>
         
             
        	
       </div>

    </div>

 </div>

@endsection

