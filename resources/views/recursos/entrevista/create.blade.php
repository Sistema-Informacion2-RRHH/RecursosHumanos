@extends('plantilla.main')
@section('titulo')
 ENTREVISTAS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVA ENTREVISTA </h3>            
              
        {!!Form::open( array('url'=>'entrevista','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}

        <div class="form-group">
        <label form="FechaInicio">FECHA INICIO</label>
        <input type="date" name="FechaInicio" class="form-control" placeholder="continuo" required>
        </div>

        <div class="form-group">
        <label form="FechaFin">FECHA FIN</label>
        <input type="date" name="FechaFin" class="form-control" placeholder="continuo" required>
        </div>

        <div class="form-group">
        <label form="HoraInicio">HORA INICIO</label>
        <input type="time" name="HoraInicio" class="form-control" placeholder="continuo" required>
        </div>

        <div class="form-group">
        <label form="HoraFin">HORA FIN</label>
        <input type="time" name="HoraFin" class="form-control" placeholder="continuo" required>
        </div>

        <div class="form-group">
        <label form="SalarioEsperado">SALARIO ESPERADO</label>
        <input type="number" name="SalarioEsperado" step="any" class="form-control" placeholder="1.5" required>
        </div>

        <div class="form-group">
        <label form="SalarioPropuesto">SALARIO PROPUESTO</label>
        <input type="number" name="SalarioPropuesto" step="any" class="form-control" placeholder="1.2" required>
        </div>

        <div class="form-group">
        <label form="DisponibilidadTiempo">DISPONIBILIDAD DE TIEMPO</label>
        <input type="date" name="DisponibilidadTiempo" class="form-control" placeholder="continuo" required>
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
        <label form="IdSeleccion">SELECCION</label>
        <select name="IdSeleccion" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($seleccion as $c)

          <option value="{{$c->Id}}">{{$c->Recomendacion}}</option> 

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