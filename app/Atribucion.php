<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atribucion extends Model
{
    protected $table = 'atribucion';
    
	protected $primaryKey='id';
	
	public $timestamps=false;
	
	protected $fillable=['nombre'];
}
