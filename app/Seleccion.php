<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seleccion extends Model
{
    protected $table = 'seleccion';
    
	protected $primaryKey='Id';
	
	public $timestamps=false;
	
	protected $fillable=['Recomendacion','Puntuacion','IdReclutamiento','IdPostulante'];

	public function reclutamiento(){
     return $this->belongsTo('App\Reclutamiento','IdReclutamiento','Id');
    }

	public function postulante(){
     return $this->belongsTo('App\Postulante','IdPostulante','Id');
    }


}
