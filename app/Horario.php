<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horario';
    
	protected $primaryKey='id';
	
	public $timestamps=false;
	
	protected $fillable=['diaSemana','HoraEntradaM','HoraSalidaM','HoraEntradaT','HoraSalidaT','HoraSabadoE','HoraSabadoS'];
}
