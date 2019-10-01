<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostReclut extends Model
{
    protected $table = 'postreclut';
    
	protected $primaryKey='Id';
	
	public $timestamps=false;
	
	protected $fillable=['IdReclutamiento','IdPostulante','FechaSolicitud','HoraSolicitud'];

	public function reclutamiento(){
     return $this->belongsTo('App\Reclutamiento','IdReclutamiento','Id');
    }

	public function postulante(){
     return $this->belongsTo('App\Postulante','IdPostulante','Id');
    }
	
}
