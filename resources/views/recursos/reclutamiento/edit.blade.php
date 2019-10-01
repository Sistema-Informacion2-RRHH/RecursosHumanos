@extends('plantilla.main')
@section('titulo')
 RECLUTAMIENTOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR RECLUTAMIENTO </h3>            
             
        
{!!Form::model($reclutamiento,['method'=>'PATCH','route'=>['reclutamiento.update',$reclutamiento->Id] ])!!}
        {{Form::token()}}


        <div class="form-group">
        <label form="NombrePuesto">NOMBRE DEL PUESTO</label>
        <input type="text" name="NombrePuesto" required="required" class="form-control" value=" {{$reclutamiento->NombrePuesto}}"  placeholder="contador" >
        </div>

        <div class="form-group">
        <label form="DescripcionPuesto">DESCRIPCION</label>
        <input type="text" name="DescripcionPuesto" required="required" class="form-control" value=" {{$reclutamiento->DescripcionPuesto}}" placeholder="asuntos.." >
        </div>

        <div class="form-group">
        <label form="LugarTrabajo">LUGAR DE TRABAJO</label>
        <input type="text" name="LugarTrabajo" required="required" class="form-control" value=" {{$reclutamiento->LugarTrabajo}}" placeholder="santa cruz" >
        </div>

        <div class="form-group">
        <label form="FechaInicioPublic">FECHA INICIO</label>
        <input type="date" name="FechaInicioPublic" required="required" class="form-control"       value="{{$reclutamiento->FechaInicioPublic}}"  placeholder="2019/05/01" >
        </div>

        <div class="form-group">
        <label form="FechaFinPublic">FECHA FIN</label>
        <input type="date" name="FechaFinPublic" required="required" class="form-control"           value="{{$reclutamiento->FechaFinPublic}}" placeholder="2019/05/01" >
        </div>

        <div class="form-group">
        <label form="HoraInicioPublic">HORA INICIO</label>
        <input type="time" name="HoraInicioPublic" required="required" class="form-control"        value="{{$reclutamiento->HoraInicioPublic}}" placeholder="15:00: pm" >
        </div>

        <div class="form-group">
        <label form="HoraFinPublic">HORA FIN</label>
        <input type="time" name="HoraFinPublic" required="required" class="form-control"           value="{{$reclutamiento->HoraFinPublic}}" placeholder="15:00:pm" >
        </div>
        
        <div class="form-group">
        <label form="NroEmpleadosEsperados">NRO EMPLEADOS</label>
        <input type="numeric" name="NroEmpleadosEsperados" required="required" class="form-control" value="{{$reclutamiento->NroEmpleadosEsperados}}" placeholder="1" >
        </div>

        <div class="form-group">
        <label form="TipoPostulante">TIPO</label>
        <select name="TipoPostulante" required="required" class="browser-default custom-select custom-select-lg mb-3">

          @if($reclutamiento->TipoPostulante=='I' || $reclutamiento->TipoPostulante=='i')
          <option value="I" selected>INTERNO</option> 
          <option value="E">EXTERNO</option> 
          
          @else
          <option value="I">INTERNO</option> 
          <option value="E" selected>EXTERNO</option> 
          
         @endif 
         
        </select>   
        </div>

        <div class="form-group">
        <label form="CodigoJefeDpto">JEFE DE DEPARTAMENTO</label>
        <select name="CodigoJefeDpto" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($jefedepartamento as $c)
        @if($c->Codigo==$reclutamiento->CodigoJefeDpto)
          <option value="{{$c->Codigo}}" selected>{{$c->Descripcion}}</option>
          @else
          <option value="{{$c->Codigo}}">{{$c->Descripcion}}</option> 
          @endif

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