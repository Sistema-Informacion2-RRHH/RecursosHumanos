<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'turno';
    
	protected $primaryKey='id';
	
	public $timestamps=false;
	
	protected $fillable=['tipo_turno','IdHorario'];

    public function Cargo(){

	return $this->belongsTo('App\Cargo');

	}


}
