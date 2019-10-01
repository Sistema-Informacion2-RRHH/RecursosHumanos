@extends('plantilla.main')
@section('titulo')
 INFORMACION PRIVADA 
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2 ">

           <h3> NUEVA INFORMACION PRIVADA  </h3>  

           @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ul>
            </div>
            @endif   
        
        {!!Form::open( array('url'=>'informacionprivada','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}


        <div class="form-group">

        <label form="Nacionalidad">NACIONALIDAD</label>
        <input name="Nacionalidad" type="text" required="required" class="form-control" placeholder="chileno">
      
        </div>		
			
		 <div class="form-group">
        <label form="EstadoCivil">ESTADO CIVIL</label>
        <select name="EstadoCivil" required="required" class="browser-default custom-select custom-select-lg mb-3">

          <option value="C">CASADO</option> 
		  <option value="S">SOLTERO</option> 
		  <option value="D">DIVORSIADO</option> 
		  <option value="V">VIUDO</option> 
		 
        </select>   
        </div>

        <div class="form-group">

        <label form="NroHijos">NRO HIJOS</label>
        <input name="NroHijos" type="number" required="required" class="form-control" placeholder="0">
      
        </div>

        <div class="form-group">

        <label form="Ciudad">CIUDAD</label>
        <input name="Ciudad" type="text" required="required" class="form-control" placeholder="santa cruz">
      
        </div>

        <div class="form-group">

        <label form="FechaNacimiento">FECHA DE NACIMIENTO</label>
        <input name="FechaNacimiento" type="date" required="required" class="form-control" >
      
        </div>

        <div class="form-group">

        <label form="NroCuentaBancaria">NRO DE CUENTA BANCARIA</label>
        <input name="NroCuentaBancaria" type="number" required="required" class="form-control" placeholder="777788889">
      
        </div>

        <div class="form-group">

        <label form="NombreContactoEmergencia">NOMBRE DEL CONTACTO DE EMERGENCIA</label>
        <input name="NombreContactoEmergencia" type="text" required="required" class="form-control" placeholder="juan">
      
        </div>

			
		<div class="form-group">

        <label form="NroContactoEmergencia">NRO DEL CONTACTO DE EMERGENCIA</label>
        <input name="NroContactoEmergencia" type="number" required="required" class="form-control" placeholder="12345">
      
        </div>

        <div class="form-group">

        <label form="Pasaporte">PASAPORTE</label>
        <input name="Pasaporte" type="number" required="required" class="form-control" placeholder="999888988">
      
        </div>

        <div class="form-group">

        <button class="btn btn-primary" type="submit">GUARDAR</button>
        <button class="btn btn-danger" type="reset">CANCELAR</button>
      
        </div>

        {!!Form::close()!!}
        </div>

    </div>
</div>

@endsection