<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    protected $table = 'capacitacion';
    
	protected $primaryKey='Codigo';
	
	public $timestamps=false;
	
	protected $fillable=['Codigo','FechaInicio','FechaFin','Descripcion','IdEmpleado','TipoCapacitacion'];
}
