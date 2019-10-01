<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacacion extends Model
{
    protected $table = 'vacacion';
    
	protected $primaryKey='Id';
	
	public $timestamps=false;
	
	protected $fillable=['FechaInicio','FechaFin'];

}
