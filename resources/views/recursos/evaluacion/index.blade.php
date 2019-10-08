@extends('plantilla.main')

@section('titulo')
EVALUACION
@endsection

@section('contenido')

<div class="container">

	<div class="row">

		<div class="col-md-8 col-md-offset-2" align="center">

			<h3> LISTADO DE EVALUACION </h3>

		</div>
	</div>


	<div class="table-responsive">
		<table class="table table-striped table-bordered table=condensed table-hover">
			<thead>
				<th>CODIGO</th>
				<th>FECHA INICIO</th>
				<th>FECHA FIN</th>
				<th>HORA INICIO</th>
				<th>HORA FIN</th>
				<th>DESCRIPCION</th>
				<th>TIPOEVALUACION</th>
				<th>ACCION </th>
			</thead>

			@foreach($evaluacion as $t)
			<tr>
				<td>{{$t->Codigo}}</td>
				<td>{{$t->FechaInicio}}</td>
				<td>{{$t->FechaFin}}</td>
				<td>{{$t->HoraInicio}}</td>
				<td>{{$t->HoraFin}}</td>
				<td>{{$t->Descripcion}}</td>
				<td>{{$t->TipoEvaluacion}}</td>
				<td>
					<a href="{{URL::action('EvaluacionController@edit',$t->Codigo)}}"><button
							class="btn btn-info">EDITAR</button></a>
					<a href="" data-target="#modal-delete-{{$t->Codigo}}" data-toggle="modal"><button
							class="btn btn-danger">ELIMINAR</button></a>
				</td>
			</tr>
			@include('recursos.evaluacion.modal')
			@endforeach

		</table>
		<div align="left">
			<a href="evaluacion/create"> <button class="btn btn-success"> NUEVO</button></a>
		</div>

	</div>
	{!!$evaluacion->render()!!}


</div>

@endsection