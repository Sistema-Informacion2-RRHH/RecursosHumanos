<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanillaEvaluacion extends Model
{
    protected $table = 'planillaevaluacion';
    
	protected $primaryKey= 'CodigoEvaluacion';
	
	protected $fillable=['IdEntrevista','IdPrueba','CodigoEvaluacion','FormacionAcademica','ExperienciaAcademica','ExperienciaPuesto','ExperienciaProfesional','Actitud','CapacidaAnalisis','Competitividad','PuntuacionTotal'];
    

	public function evaluacion(){//un usuario tiene un
        return $this->belongsTo('App\Contrato','CodigoEvaluacion','Codigo');
    }

    public function periodoprueba(){//un usuario tiene un
        return $this->belongsTo('App\PeriodoPrueba','IdPrueba','Idprueba');
    } 
    
    public $timestamps=false;
}
