@extends('plantilla.main')
@section('titulo')
 USUARIOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVO USUARIO </h3>            
             
        
        {!!Form::open( array('url'=>'user','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}


        <div class="form-group">
        <label form="name">NOMBRE</label>
        <input type="text" name="name" class="form-control" placeholder="juaquin" required>
        </div>

         <div class="form-group">
        <label form="email">EMAIL</label>
        <input type="email" name="email" class="form-control" placeholder="ejemplo@gmail.com" required>
        </div>

         <div class="form-group">
        <label form="password">PASSWORD</label>
        <input type="password" name="password" class="form-control" placeholder="********" required>
        </div>

        <div class="form-group">
        <label form="idrol">ROL</label>
        <select name="idrol" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($rol as $c)

          <option value="{{$c->id}}">{{$c->nombre}}</option> 

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