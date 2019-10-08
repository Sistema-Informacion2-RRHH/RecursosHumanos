<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    protected $table = 'seguro';
    
	protected $primaryKey='Codigo';
	
	public $timestamps=false;
	
	protected $fillable=['NombreAseguradora','Telefono','Descripcion'];
}
