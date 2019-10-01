
@extends('plantilla.main')

@section('titulo')
 BENEFICIO
@endsection

@section('contenido')

 <div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

           <h3> LISTADO DE BENEFICIOS </h3> 
        </div>
    </div>
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
     <div class="table-responsive">

        <table class="table table-striped table-bordered table=condensed table-hover">
         <thead>
            <th>ID</th>
            <th>DESCRIPCION</th>
            <th>ACCION.. <a href="beneficio/create"> <button class="btn btn-success"> NUEVO</button></a></th>
         </thead>
         @foreach($beneficio as $t)
         <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->Descripcion}}</td>
            <td>
            <a href="{{URL::action('BeneficioController@edit',$t->id)}}"><button class="btn btn-info">EDITAR</button></a>
            <a href="" data-target="#modal-delete-{{$t->id}}" data-toggle="modal"><button class="btn btn-danger">ELIMINAR</button></a>
            </td>
        </tr>
          @include('recursos.beneficio.modal')
         @endforeach
        </table>
     </div>
     {!!$beneficio->render()!!}
    </div>
  </div>
 </div>

@endsection

