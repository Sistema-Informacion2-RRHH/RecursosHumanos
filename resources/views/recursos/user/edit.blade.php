@extends('plantilla.main')
@section('titulo')
 USUARIOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> Editar Usuario </h3>            
             
        
        {!!Form::model($user,['method'=>'PATCH','route'=>['user.update',$user->id] ])!!}
        {{Form::token()}}

        <div class="form-group">
        <label form="name">NOMBRE</label>
        <input type="text" name="name" class="form-control" value=" {{$user->name}}" placeholder="continuo">
        </div>

         <div class="form-group">
        <label form="email">EMAIL</label>
        <input type="text" name="email" class="form-control" value=" {{$user->email}}" placeholder="continuo">
        </div>

        
        <div class="form-group">
        <label form="idrol">ROL</label>
        <select name="idrol" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($rol as $c)

        @if($c->id==$user->idrol)
          <option value="{{$c->id}}" selected>{{$c->nombre}}</option> 
           @else
          <option value="{{$c->id}}">{{$c->nombre}}</option> 

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