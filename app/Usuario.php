<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $table = 'users';
    
    protected $primaryKey='id';
    public $timestamps=false;

   
    protected $fillable = [
        'name', 'email', 'password','idrol',];

    
    protected $hidden = [
        'password', 'remember_token',];

  

}
