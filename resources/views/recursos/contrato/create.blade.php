@extends('plantilla.main')
@section('titulo')
 CONTRATO
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVO CONTRATO </h3>            
             
        
        {!!Form::open( array('url'=>'contrato','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}

        <div class="form-group">

        <label form="Codigo">CODIGO</label>
        <input type="text" name="Codigo" class="form-control" value="0" placeholder="1">
      
        </div>

        <div class="form-group">
        <label form="FechaInicio">FECHA INICIO</label>
        <input type="date" name="FechaInicio" class="form-control" >
        </div>

        <div class="form-group">
        <label form="FechaFin">FECHA FIN</label>
        <input type="date" name="FechaFin" class="form-control" placeholder="continuo">
        </div>

        <div class="form-group">
        <label form="Tipo">DESCRIPCION</label>
        <input type="text" name="Tipo" class="form-control" placeholder="coloque aqui la descripcion">
        </div>
<div class="form-group">
        <label form="Tipo">IDENTREVISTA</label>
        <input type="text" name="Tipo" class="form-control" placeholder="00">
        </div>
<div class="form-group">
        <label form="Tipo">IDPRUEBA</label>
        <input type="text" name="Tipo" class="form-control" placeholder="00">
        </div>
<div class="form-group">
        <label form="Tipo">CODIGO EVALUACION</label>
        <input type="text" name="Tipo" class="form-control" placeholder="00">
        </div>



     <!--   <div class="form-group">
        <label form="idBeneficio">BENEFICIO</label>
        <select name="idBeneficio" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($beneficio as $c)

          <option value="{{$c->id}}">{{$c->Descripcion}}</option> 

       @endforeach
        </select>   
        </div>

        <div class="form-group">
        <label form="idEmpleado">EMPLEADO</label>
        <select name="idEmpleado" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($empleado as $c)

          <option value="{{$c->id}}">{{$c->Nombre}}</option> 

       @endforeach
        </select>   
        </div>
-->

        <div class="form-group">

        <button class="btn btn-primary" type="submit">GUARDAR</button>
        <button class="btn btn-danger" type="reset">CANCELAR</button>
      
        </div>

        {!!Form::close()!!}
        </div>

    </div>
</div>

@endsection