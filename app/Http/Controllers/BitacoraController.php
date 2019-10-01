<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bitacora;
use Illuminate\Support\Facades\Redirect;
use DB;

class BitacoraController extends Controller
{
    public function __construct(){
     $this->middleware('auth');
    }

    public function index(){
    
    	//$bitacora=Bitacora::orderBy('id','ASC')->paginate(10);
        $bitacora = DB::select('select bitacora.id as Id, users.name as Usuario,rol.nombre as Rol,recurso.nombre as Recurso ,atribucion.nombre as Atribucion from users,rol,recurso,atribucion,bitacora where idusuario=users.id and bitacora.idrol=rol.id and idrecurso=recurso.id and idatribucion=atribucion.id ORDER BY bitacora.id ASC');
     
       $recursos=$this->recurso();

        return view ('recursos.bitacora.index')
        ->with('bitacora',$bitacora)
        ->with('recursos',$recursos);
                    
                 

    } 


}
