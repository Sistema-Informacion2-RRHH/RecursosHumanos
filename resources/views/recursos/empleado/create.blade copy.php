@extends('plantilla.main')
@section('titulo')
EMPLEADOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h3> NUEVO EMPLEADO </h3>

            @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ul>
            </div>
            @endif  
            {!!Form::open( array('url'=>'empleado','method'=>'POST','autocomplete'=>'off') )!!}
            {!!Form::token()!!}

            <div class="form-group">

                <label form="CI">CI</label>
                <input type="text" name="CI" class="form-control" placeholder="continuo">

            </div>

            <div class="form-group">

                <label form="Nombre">NOMBRE</label>
                <input type="text" name="Nombre" class="form-control" placeholder="continuo">

            </div>

            <div class="form-group">

                <label form="Direccion">DIRECCION</label>
                <input type="text" name="Direccion" class="form-control" placeholder="continuo">

            </div>

            <div class="form-group">

                <label form="Email">CORREO</label>
                <input type="text" name="Email" class="form-control" placeholder="continuo">

            </div>

            <div class="form-group">

                <label form="Sexo">SEXO</label>
                <input type="text" name="Sexo" class="form-control" placeholder="continuo">

            </div>


            <div class="form-group">

                <label form="Profesion">PROFESION</label>
                <input type="text" name="Profesion" class="form-control" placeholder="continuo">

            </div>


            <div class="form-group">
                <label form="IdCargo">CARGO</label>
                <select name="IdCargo" class="browser-default custom-select custom-select-lg mb-3">

                    @foreach($cargo as $c)

                    <option value="{{$c->Id}}">{{$c->Nombre}}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label form="IdInformPrivada">NACIONALIDAD</label>
                <select name="IdInformPrivada" class="browser-default custom-select custom-select-lg mb-3">
        
               @foreach($informacionprivada as $c)
        
                  <option value="{{$c->id}}">{{$c->Nacionalidad}}</option> 
        
               @endforeach
                </select>   
                </div>

            <div class="form-group">
                <label form="CodigoDpto">DEPARTAMENTO</label>
                <select name="CodigoDpto" class="browser-default custom-select custom-select-lg mb-3">

                    @foreach($departamento as $c)

                    <option value="{{$c->Codigo}}">{{$c->Nombre}}</option>

                    @endforeach
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
                <label form="CodigoContrato">CONTRATO</label>
                <select name="CodigoContrato" class="browser-default custom-select custom-select-lg mb-3">

                    @foreach($contrato as $c)

                    <option value="{{$c->Codigo}}">{{$c->Codigo}}</option>

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