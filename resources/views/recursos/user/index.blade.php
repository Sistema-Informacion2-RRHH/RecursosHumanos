@extends('plantilla.main')

@section('titulo')
USUARIOS
@endsection

@section('contenido')

<div class="container">

	<div class="row">

		<div class="col-md-8 col-md-offset-2">

			<h3> LISTADO DE USUARIOS </h3>

		</div>

	</div>

	<div class="row">

		<div class="col-md-8 col-md-offset-2" align="center">

			<div class="table-responsive">
				<table class="table table-striped table-bordered table=condensed table-hover">
					<thead>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>EMAIL</th>
						<th>ROL</th>
						<th>ACCION</th>
					</thead>

					@foreach($user as $t)
					<tr>
						<td>{{$t->id}}</td>
						<td>{{$t->name}}</td>
						<td>{{$t->email}}</td>
						<td>{{$t->rol->nombre}}</td>
						<td>
							<a href="{{URL::action('UserController@edit',$t->id)}}"><button
									class="btn btn-info">EDITAR</button></a>
							<a href="" data-target="#modal-delete-{{$t->id}}" data-toggle="modal"><button
									class="btn btn-danger">ELIMINAR</button></a>
						</td>
					</tr>
					@include('recursos.user.modal')
					@endforeach

				</table>
				<div align="left">
					<a href="user/create"> <button class="btn btn-success"> NUEVO</button></a>
				</div>

			</div>
			{!!$user->render()!!}
		</div>

	</div>

</div>

@endsection