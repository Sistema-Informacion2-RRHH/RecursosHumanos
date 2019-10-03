<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
	id="modal-delete-{{$item['CodigoEvaluacion']}}">


	{!!Form::Open(array('action'=>array('PlanillaEvaluacionController@destroy',$item['CodigoEvaluacion']),'method'=>'DELETE'))!!}

	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">X</span>
				</button>

				<h4 class="modal-title">ELIMINAR PLANILLA DE EVALUACION </h4>

			</div>

			<div class="modal-body">
				<p>CONFIRME SI DESEA ELIMINAR la PLANILLA DE EVALUACION</p>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
				{!!Form::submit('CONFIRMAR',['class'=>'btn btn-primary'])!!}
			</div>


		</div>
	</div>

	{!!Form::Close()!!}

</div>