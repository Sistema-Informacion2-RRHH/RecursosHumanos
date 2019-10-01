<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
    
    protected $table = 'entrevista';
    
	protected $primaryKey='Id';
	
	public $timestamps=false;
	
	protected $fillable=['FechaInicio','FechaFin','HoraInicio','HoraFin','SalarioEsperado','SalarioPropuesto','DisponibilidadTiempo','CodigoJefeDpto','IdSeleccion'];

	public function jefedpto(){
     return $this->belongsTo('App\JefeDepartamento','CodigoJefeDpto','Codigo');
    }

    public function seleccion(){
     return $this->belongsTo('App\Seleccion','IdSeleccion','Id');
    }

 
}
