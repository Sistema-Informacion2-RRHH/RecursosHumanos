@extends('plantilla.main')
@section('titulo')
 PRIVILEGIOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> NUEVO PRIVILEGIO </h3>            
             
        
        {!!Form::open( array('url'=>'privilegio','method'=>'POST','autocomplete'=>'off') )!!}
        {!!Form::token()!!}     

         <div class="form-group">
        <label form="idrol">ROL :</label>
        <select name="idrol" class="browser-default custom-select custom-select-lg mb-3">

       @foreach($rol as $c)

          <option value="{{$c->id}}">{{$c->nombre}}</option> 

       @endforeach
        </select>   
        </div>

        <div class="table-responsive">
               
                <table class="table table-striped table-bordered table=condensed table-hover">
                    <thead>
                        <th>RECURSOS</th>
                        <th>ATRIBUCIONES</th>
                    </thead>

                    @foreach($recurso as $t)
                    <tr>

                     <td>{{$t->nombre}}</td>

                     <td><label for="checkbox">
                        <input type="checkbox" name="leer[{{$t->id}}]" id="checkbox">
                        leer 
                        <input type="checkbox" name="crear[{{$t->id}}]" id="checkbox2">
                        crear
                        <input type="checkbox" name="editar[{{$t->id}}]" id="checkbox3">
                        editar
                        <input type="checkbox" name="eliminar[{{$t->id}}]" id="checkbox4">
                        eliminar </label></td>                   

                    </tr>
                   
                    @endforeach  

                </table>

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