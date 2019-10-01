<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoPrueba extends Model
{
    protected $table = 'periodoprueba';
    
	protected $primaryKey='IdPrueba';
	
	public $timestamps=false;
	
	protected $fillable=['IdEntrevista','IdPrueba','FechaInicio','FechaFin','Hora'];

	public function entrevista(){
     return $this->belongsTo('App\Entrevista','IdEntrevista','Id');
    }

}
