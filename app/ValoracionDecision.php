<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValoracionDecision extends Model
{
    protected $table = 'valoraciondecision';
    
	protected $primaryKey='Id';
	
	public $timestamps=false;
	
	protected $fillable=['Aceptado'];
}
