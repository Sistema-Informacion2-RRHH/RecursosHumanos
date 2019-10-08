<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    
	protected $primaryKey='Codigo';
	
	public $timestamps=false;
	
	protected $fillable=['Nombre','NroEmpleado'];
	
	public function jefes(){//un usuario tiene un
    return $this->hasOne('App\JefeDepartamento','CodigoDpto','Codigo');
    }
    

}
