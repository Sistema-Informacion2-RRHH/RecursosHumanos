
<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$t->id}}">

 
 {!!Form::Open(array('action'=>array('BeneficioController@destroy',$t->id),'method'=>'DELETE'))!!}

 <div class="modal-dialog">
 	<div class="modal-content">

 		<div class="modal-header">

 		 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 		 	<span aria-hidden="true">X</span>
 		 </button>

 		 <h4 class="modal-title">ELIMINAR BENEFICIO </h4>

 		</div>

 		<div class="modal-body">
 			<p>CONFIRME SI DESEA ELIMINAR EL BENEFICIO</p>
 		</div>

 		<div class="modal-footer">
 		<button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
 		{!!Form::submit('CONFIRMAR',['class'=>'btn btn-primary'])!!}	
 		</div>


 	</div>
 </div>

 {!!Form::Close()!!}

</div>