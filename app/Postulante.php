<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    protected $table = 'postulante';
    
	protected $primaryKey='Id';
	
	public $timestamps=false;
	
	protected $fillable=['CI','Nombre','Correo','NroTelefono','Descripcion','Curriculum'];

	

}
