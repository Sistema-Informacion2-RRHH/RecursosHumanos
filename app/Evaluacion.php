<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluacion';
    
    protected $primaryKey='Codigo';
    
	protected $fillable=['FechaInicio','FechaFin','HoraInicio','HoraFin','Descripcion','TipoEvaluacion'];
	
	public $timestamps=false;
	
}
