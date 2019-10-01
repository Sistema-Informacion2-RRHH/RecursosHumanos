<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';
    
	protected $primaryKey='Id';
	
	public $timestamps=false;
	
	protected $fillable=['Nombre','Descripcion'];


	
	


}
