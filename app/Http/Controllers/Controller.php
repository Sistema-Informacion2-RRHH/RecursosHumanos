<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Recurso;
use App\Bitacora;
use DB;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function recurso(){

        $recursos=Recurso::orderBy('id','asc')->get();
        $aux=[];
        foreach ($recursos as $key => $value) {
            $value->id;
            $aux[$value->nombre]=false;
        }

        if(Auth::user()!=null){

         $contenido= DB::select('select distinct recurso.nombre as Recurso from privilegio,rol,recurso 
        where privilegio.idrol=rol.id 
        and privilegio.idrecurso=recurso.id
        and idrol = ?', [Auth::user()->idrol]);

        foreach ($contenido as $key => $value) {
         $nom=$value->Recurso;
         $aux[$nom]=true;
        }
        

        }
        
        return $aux;

    }


    public function historial($recurso,$atribucion){

        $bitacora=new Bitacora;
        $bitacora->idusuario=Auth::user()->id;
        $bitacora->idrol=Auth::user()->idrol;
        $ide=DB::table('recurso')->where('nombre', $recurso)->first();
        $bitacora->idrecurso=$ide->id;
        $bitacora->idatribucion=$atribucion;
        $bitacora->save();
       }
    
}
