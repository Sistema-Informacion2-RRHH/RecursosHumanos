<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    
	protected $primaryKey='Id';
	
	public $timestamps=false;
	
	protected $fillable=['CI','Nombre','Direccion','Correo','Sexo','Profesion','IdCargo','IdInformPrivada','CodigoDpto','CodigoJefeDpto','CodigoContrato'];

	public function cargo(){
		return $this->belongsTo('App\Cargo','IdCargo','Id');
	}

	public function informacionprivada(){
		return $this->belongsTo('App\InformacionPrivada','IdInformPrivada','Id');
	}

	public function departamento(){
		return $this->belongsTo('App\Departamento','CodigoDpto','Codigo');
	   }

	public function jefedepartamento(){
		return $this->belongsTo('App\JefeDepartamento','CodigoJefeDpto','Id');
	}

	public function contrato(){
		return $this->belongsTo('App\Contrato','CodigoContrato','Codigo');
	}
	
}
