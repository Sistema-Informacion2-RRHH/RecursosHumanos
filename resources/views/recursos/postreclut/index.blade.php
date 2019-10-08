@extends('plantilla.main')

@section('titulo')
POSTULANTES RECLUTADOS
@endsection

@section('contenido')

<div class="container">

	<div class="row">

		<div class="col-md-8 col-md-offset-2" align="center">

			<h3> LISTADO DE POSTULANTES RECLUTADOS </h3>

		</div>

	</div>

	<div class="table-responsive">
		<table class="table table-striped table-bordered table=condensed table-hover">
			<thead>
				<th>ID</th>
				<th>RECLUTAMIENTO</th>
				<th>POSTULANTE</th>
				<th>FECHA DE SOLICITUD</th>
				<th>HORA DE SOLICITUD</th>
				<th>ACCION</th>
			</thead>

			@foreach($postreclut as $t)
			<tr>
				<td>{{$t->Id}}</td>
				<td>{{$t->reclutamiento->NombrePuesto}}</td>
				<td>{{$t->postulante->Nombre}}</td>
				<td>{{$t->FechaSolicitud}}</td>
				<td>{{$t->HoraSolicitud}}</td>
				<td>
					<a href="{{URL::action('PostReclutController@edit',$t->Id)}}"><button
							class="btn btn-info">EDITAR</button></a>
					<a href="" data-target="#modal-delete-{{$t->Id}}" data-toggle="modal"><button
							class="btn btn-danger">ELIMINAR</button></a>
				</td>
			</tr>
			@include('recursos.postreclut.modal')
			@endforeach

		</table>
		<div align="left">
			<a href="postreclut/create"> <button class="btn btn-success"> NUEVO</button></a>
		</div>

	</div>
	{!!$postreclut->render()!!}
</div>

@endsection