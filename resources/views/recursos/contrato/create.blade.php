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
                            <label form="FechaInicio">FECHA INICIO</label>
                            <input type="date" name="FechaInicio" class="form-control">
                     </div>

                     <div class="form-group">
                            <label form="FechaFin">FECHA FIN</label>
                            <input type="date" name="FechaFin" class="form-control">
                     </div>

                     <div class="form-group">
                            <label form="tipo">Tipo de Contrato</label>
                            <input type="text" name="tipo" class="form-control">
                     </div>


                     <div class="form-group">
                            <label form="salario">SALARIO</label>
                            <input type="text" name="salario" class="form-control">
                     </div>
                     <div class="form-group">
                            <label form="FechaFin">Forma de Pago</label>
                            <input type="text" name="formapago" class="form-control">
                     </div>
                     <div class="form-group">
                            <label form="FechaFin">Periodo de Pago</label>
                            <input type="text" name="periodopago" class="form-control">
                     </div>


                     <div class="form-group">
                            <label form="lugartrabajo">Lugar de Trabajo</label>
                            <input type="text" name="lugartrabajo" class="form-control">
                     </div>




                     <div class="form-group">
                            <label form="IdEntrevista">ENTREVISTA</label>
                            <select name="IdEntrevista" class="browser-default custom-select custom-select-lg mb-3">

                                   @foreach($planillaevaluacion as $c)

                                   <option value="{{$c->IdEntrevista}}">{{$c->IdEntrevista}}</option>

                                   @endforeach
                            </select>
                     </div>

                     <div class="form-group">
                            <label form="IdPruebas">PRUEBA</label>
                            <select name="IdPruebas" class="browser-default custom-select custom-select-lg mb-3">

                                   @foreach($planillaevaluacion as $c)

                                   <option value="{{$c->IdPrueba}}">{{$c->IdPrueba}}</option>

                                   @endforeach
                            </select>
                     </div>

                     <div class="form-group">
                            <label form="CodigoEvaluacion">EVALUACION</label>
                            <select name="CodigoEvaluacion" class="browser-default custom-select custom-select-lg mb-3">

                                   @foreach($planillaevaluacion as $c)

                                   <option value="{{$c->CodigoEvaluacion}}">{{$c->CodigoEvaluacion}}</option>

                                   @endforeach
                            </select>
                     </div>


                     <!--<div class="form-group">
        <label form="Curriculum">DOCUMENTO CONTRATO</label>
        <input type="file" name="Curriculum" class="form-control" required>
        </div> -->




                     <div class="form-group">

                            <button class="btn btn-primary" type="submit">GUARDAR</button>
                            <button class="btn btn-danger" type="reset">CANCELAR</button>

                     </div>

                     {!!Form::close()!!}
              </div>

       </div>
</div>

@endsection