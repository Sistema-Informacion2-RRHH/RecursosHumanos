@extends('plantilla.main')

@section('titulo')
 EMPLEADOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> Editar empleado {{$empleado->Nombre}}</h3>   
           @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ul>
            </div>
            @endif           
             
        
        {!!Form::model($empleado,['method'=>'PATCH','route'=>['empleado.update',$empleado->id] ])!!}
        {{Form::token()}}

        <div class="form-group">

        <label form="CI">CI</label>
        <input type="text" name="CI" class="form-control" value="{{$empleado->CI}}" placeholder="continuo">
      
        </div>

        <div class="form-group">

        <label form="Nombre">NOMBRE</label>
        <input type="text" name="Nombre" class="form-control" value="{{$empleado->Nombre}}" placeholder="continuo">
      
        </div>

        <div class="form-group">

        <label form="Direccion">DIRECCION</label>
        <input type="text" name="Direccion" class="form-control" value="{{$empleado->Direccion}}" placeholder="continuo">
      
        </div>

        <div class="form-group">

        <label form="Email">EMAIL</label>
        <input type="text" name="Email" class="form-control" value="{{$empleado->Email}}" placeholder="continuo">
      
        </div>

        <div class="form-group">

        <label form="Sexo">SEXO</label>
        <input type="text" name="Sexo" class="form-control" value="{{$empleado->Sexo}}" placeholder="continuo">
      
        </div>

        <div class="form-group">

        <label form="Telefono_tra">TELEFONO</label>
        <input type="text" name="Telefono_tra" class="form-control" value="{{$empleado->Telefono_tra}}" placeholder="continuo">
      
        </div>

        <div class="form-group">

        <label form="movil_tra">MOVIL</label>
        <input type="text" name="movil_tra" class="form-control" value="{{$empleado->movil_tra}}" placeholder="continuo">
      
        </div>

        <div class="form-group">

        <label form="Profesion">PROFESION</label>
        <input type="text" name="Profesion" class="form-control" value="{{$empleado->Profesion}}" placeholder="continuo">
      
        </div>

        <div class="form-group">
        <label form="IdCargo">CARGO</label>
        <select name="IdCargo" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($cargo as $c)

         @if($c->Id==$empleado->IdCargo) 
          <option value="{{$c->Id}}" selected>{{$c->Nombre}}</option>
         @else
          <option value="{{$c->Id}}">{{$c->Nombre}}</option> 
         @endif 

       @endforeach
        </select>   
        </div>



       <div class="form-group">
        <label form="CodDepartamento">DEPARTAMENTO</label>
        <select name="CodDepartamento" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($departamento as $c)

         @if($c->Codigo==$empleado->CodDepartamento) 
          <option value="{{$c->Codigo}}" selected>{{$c->Nombre}}</option>
         @else
          <option value="{{$c->Codigo}}">{{$c->Nombre}}</option> 
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