<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contrato';
    
	protected $primaryKey='Codigo';
	
	public $timestamps=false;
	
	protected $fillable=['FechaInicio','FechaFin','Descripcion','IdEntrevista','IdPrueba','CodigoEvaluacion'];
}
