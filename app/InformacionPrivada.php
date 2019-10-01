<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionPrivada extends Model
{
    protected $table = 'informacionprivada';
    
	protected $primaryKey='id';
	
	public $timestamps=false;
	
	protected $fillable=['Nacionalidad','EstadoCivil','NroHijos','Ciudad','FechaNacimiento','NroCuentaBancaria','NombreContactoEmergencia','NroContactoEmergencia','Pasaporte'];
}

