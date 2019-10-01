<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    
	protected $primaryKey='id';
	
	public $timestamps=false;
	
	protected $fillable=['id','CI','Nombre','Direccion','Email','Sexo','Telefono_tra','movil_tra','Profesion','IdCargo','CodDepartamento'];

	public function Cargos(){

	return $this->hasMany('App\Cargo');

	}

	
}
