<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    protected $table = 'beneficio';
    
	protected $primaryKey='id';
	
	public $timestamps=false;
	
	protected $fillable=['Descripcion'];
}
