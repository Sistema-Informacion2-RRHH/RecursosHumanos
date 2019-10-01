@extends('plantilla.main')
@section('titulo')
 RECLUTAMIENTOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVO RECLUTAMIENTO </h3>            
             
        
        {!!Form::open( array('url'=>'reclutamiento','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!} 

        <div class="form-group">
        <label form="NombrePuesto">NOMBRE DEL PUESTO</label>
        <input type="text" name="NombrePuesto" class="form-control" placeholder="contador" required>
        </div>
        <div class="form-group">
        <label form="DescripcionPuesto">DESCRIPCION</label>
        <input type="text" name="DescripcionPuesto" class="form-control" placeholder="asuntos" required>
        </div>
        <div class="form-group">
        <label form="LugarTrabajo">LUGAR DE TRABAJO</label>
        <input type="text" name="LugarTrabajo" class="form-control" placeholder="santa cruz" required>
        </div>
        <div class="form-group">
        <label form="FechaInicioPublic">FECHA INICIO</label>
        <input type="date" name="FechaInicioPublic" class="form-control" placeholder="2019-05-01" required>
        </div>
        <div class="form-group">
        <label form="FechaFinPublic">FECHA FIN</label>
        <input type="date" name="FechaFinPublic" class="form-control" placeholder="2019-05-01" required>
        </div>
        <div class="form-group">
        <label form="HoraInicioPublic">HORA INICIO</label>
        <input type="time" name="HoraInicioPublic" class="form-control" placeholder="15:00: pm" required>
        </div>
        <div class="form-group">
        <label form="HoraFinPublic">HORA FIN</label>
        <input type="time" name="HoraFinPublic" class="form-control" placeholder="15:00: pm" required>
        </div>
        <div class="form-group">
        <label form="NroEmpleadosEsperados">NRO EMPLEADOS</label>
        <input type="number" name="NroEmpleadosEsperados" class="form-control" placeholder="1" required>
        </div>

        <div class="form-group">
        <label form="TipoPostulante">TIPO</label>
        <select name="TipoPostulante" required="required" class="browser-default custom-select custom-select-lg mb-3">

          <option value="I">INTERNO</option> 
          <option value="E">EXTERNO</option> 
         
        </select>   
        </div>

        <div class="form-group">
        <label form="CodigoJefeDpto">JEFE DE DEPARTAMENTO</label>
        <select name="CodigoJefeDpto" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($jefedepartamento as $c)

          <option value="{{$c->Codigo}}">{{$c->Descripcion}}</option> 

       @endforeach
        </select>   
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