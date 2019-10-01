<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JefeDepartamento extends Model
{
    protected $table = 'jefedepartamento';
    
	protected $primaryKey='Codigo';
		
	protected $fillable=['CorreoElectronico','Descripcion','CodigoDpto'];

	public function departamento(){//un jefe pertenece a un
     return $this->belongsTo('App\Departamento','CodigoDpto','Codigo');
	}
	
	public $timestamps=false;

}
