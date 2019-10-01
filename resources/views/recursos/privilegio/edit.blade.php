@extends('plantilla.main')
@section('titulo')
 PRIVILEGIOS
@endsection

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> EDITAR PRIVILEGIO </h3>            
             
        
        {!!Form::model($privilegio,['method'=>'PATCH','route'=>['privilegio.update',$rol->id] ])!!}
        {{Form::token()}}

         <div class="form-group">
        <label form="idrol">ROL :</label>
        <select name="idrol" class="browser-default custom-select custom-select-lg mb-3">
        
          <option value="{{$rol->id}}" selected>{{$rol->nombre}}</option>
          
        </select>   
        </div>

        <div class="table-responsive">
               
                <table class="table table-striped table-bordered table=condensed table-hover">
                    <thead>
                        <th>RECURSOS</th>
                        <th>ATRIBUCIONES</th>
                    </thead>

                    @foreach($privilegio as $t)
                    <tr>

                     <td>{{$t->nombre}}</td>

                     <td>      
                      
                        <label for="checkbox">

                        @if($t->leer)
                        <input type="checkbox" name="leer[{{$t->id}}]" id="checkbox" checked>
                        @else
                        <input type="checkbox" name="leer[{{$t->id}}]" id="checkbox">
                        @endif
                        leer 

                        @if($t->crear)
                        <input type="checkbox" name="crear[{{$t->id}}]" id="checkbox2" checked>
                        @else
                        <input type="checkbox" name="crear[{{$t->id}}]" id="checkbox2">
                        @endif
                        crear

                        @if($t->editar)
                        <input type="checkbox" name="editar[{{$t->id}}]" id="checkbox3" checked>
                        @else
                        <input type="checkbox" name="editar[{{$t->id}}]" id="checkbox3">
                        @endif
                        editar

                        @if($t->borrar)
                        <input type="checkbox" name="eliminar[{{$t->id}}]" id="checkbox4" checked>
                        @else
                        <input type="checkbox" name="eliminar[{{$t->id}}]" id="checkbox4">
                        @endif
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