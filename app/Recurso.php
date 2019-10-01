<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = 'recurso';
    
	protected $primaryKey='id';
	
	public $timestamps=false;
	
	protected $fillable=['nombre'];
}
