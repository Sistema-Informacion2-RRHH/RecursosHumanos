<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legado extends Model
{
    protected $table = 'legado';
    
	protected $primaryKey='id';
	
	public $timestamps=false;
	
	protected $fillable=['descripcion'];
}


