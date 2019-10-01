<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclutamiento extends Model
{
    
 	protected $table = 'reclutamiento';
    
	protected $primaryKey='Id';
	
	public $timestamps=false;
	
	protected $fillable=['NombrePuesto','DescripcionPuesto','LugarTrabajo','FechaInicioPublic','FechaFinPublic','HoraInicioPublic','HoraFinPublic','NroEmpleadosEsperados','TipoPostulante','CodigoJefeDpto'];

	public function jefe(){
     return $this->belongsTo('App\JefeDepartamento','CodigoJefeDpto','Codigo');
    }


}
