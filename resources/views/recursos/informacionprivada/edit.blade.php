@extends('plantilla.main')

@section('titulo')
 INFORMACION PRIVADA
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR INFORMACION PRIVADA</h3>  

			 @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ul>
            </div>
            @endif 
         
        {!!Form::model($informacionprivada,['method'=>'PATCH','route'=>['informacionprivada.update',$informacionprivada->id] ])!!}
        {{Form::token()}} 

      
       <div class="form-group">

        <label form="Nacionalidad">NACIONALIDAD</label>
        <input type="text" name="Nacionalidad" class="form-control" value="{{$informacionprivada->Nacionalidad}}" placeholder="chileno">
      
        </div>		
			
		 <div class="form-group">
        <label form="EstadoCivil">ESTADO CIVIL</label>
        <select name="EstadoCivil" class="browser-default custom-select custom-select-lg mb-3">
		
          @if($informacionprivada->EstadoCivil=='C' || $informacionprivada->EstadoCivil=='c')
          <option value="C" selected>CASADO</option> 
		  <option value="S">SOLTERO</option> 
		  <option value="D">DIVORsIADO</option> 
		  <option value="V">VIUDO</option> 
		  @elseif($informacionprivada->EstadoCivil=='S' || $informacionprivada->EstadoCivil=='s')
		  <option value="C">CASADO</option> 
		  <option value="S" selected>SOLTERO</option> 
		  <option value="D">DIVORsIADO</option> 
		  <option value="V">VIUDO</option> 
		  @elseif($informacionprivada->EstadoCivil=='D' || $informacionprivada->EstadoCivil=='d')
		  <option value="C">CASADO</option> 
		  <option value="S">SOLTERO</option> 
		  <option value="D" selected>DIVORSIADO</option> 
		  <option value="V">VIUDO</option> 
		  @else
		  <option value="C">CASADO</option> 
		  <option value="S">SOLTERO</option> 
		  <option value="D">DIVORSIADO</option> 
		  <option value="V" selected>VIUDO</option> 
		 @endif
         
        </select>   
        </div>
          

        <div class="form-group">

        <label form="NroHijos">NRO HIJOS</label>
        <input name="NroHijos" type="number" required="required" class="form-control" value="{{$informacionprivada->NroHijos}}" placeholder="0">
      
        </div>

        <div class="form-group">

        <label form="Ciudad">CIUDAD</label>
        <input name="Ciudad" type="text" required="required" class="form-control" value="{{$informacionprivada->Ciudad}}" placeholder="santa cruz">
      
        </div>

        <div class="form-group">

        <label form="FechaNacimiento">FECHA DE NACIMIENTO</label>
        <input name="FechaNacimiento" type="date" required="required" class="form-control" value="{{$informacionprivada->FechaNacimiento}}" >
      
        </div>

        <div class="form-group">

        <label form="NroCuentaBancaria">NRO DE CUENTA BANCARIA</label>
        <input name="NroCuentaBancaria" type="number" required="required" class="form-control" value="{{$informacionprivada->NroCuentaBancaria}}" placeholder="777788889">
      
        </div>

        <div class="form-group">

        <label form="NombreContactoEmergencia">NOMBRE DEL CONTACTO DE EMERGENCIA</label>
        <input name="NombreContactoEmergencia" type="text" required="required" class="form-control" value="{{$informacionprivada->NombreContactoEmergencia}}" placeholder="juan">
      
        </div>

            
        <div class="form-group">

        <label form="NroContactoEmergencia">NRO DEL CONTACTO DE EMERGENCIA</label>
        <input name="NroContactoEmergencia" type="number" required="required" class="form-control" value="{{$informacionprivada->NroContactoEmergencia}}" placeholder="123">
      
        </div>

        <div class="form-group">

        <label form="Pasaporte">PASAPORTE</label>
        <input name="Pasaporte" type="number" required="required" class="form-control" value="{{$informacionprivada->Pasaporte}}" placeholder="999888988">
      
        </div>

        <div class="form-group">

        <button class="btn btn-primary" type="submit">GUARDAR</button>
        <button class="btn btn-danger" type="reset">CANCELAR</button>
      
        </div>

      <!--  {!!Form::close()!!} -->
       
    
        </div>

    </div>
</div>

@endsection