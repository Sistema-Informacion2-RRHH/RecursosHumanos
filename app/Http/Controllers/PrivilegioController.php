<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privilegio;
use Illuminate\Support\Facades\Redirect;
use App\Rol;
use App\Recurso;
use App\Atribucion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PrivilegioController extends Controller
{
  
  public function __construct(){ 

     $this->middleware('auth'); 
    }

    public function index(){   

    
    $privilegio=$this->privilegios();	

    $recursos=$this->recurso();
    $this->historial('Privilegio',1);

       return view ('recursos.privilegio.index')
       ->with('privilegio',$privilegio)
       ->with('recursos',$recursos);
       
        

    } 

    public function create(){

      $recursos=$this->recurso();

    	return view ('recursos.privilegio.create')
        ->with('recursos',$recursos)
         ->with('rol',Rol::orderBy('nombre','asc')->get())
         ->with('recurso',Recurso::orderBy('nombre','asc')->get())
         ->with('Atribucion',Atribucion::orderBy('nombre','asc')->get());
        
    }

    public function store(Request $request){

        $this->grabar($request); 
        $this->historial('Privilegio',2);  
       	
    	
    	return Redirect::to('privilegio');
    }
    
    
    public function show($id){
    	
        return view('recursos.privilegio.show')->with('privilegio',Privilegio::findOrFail($id))
        ->with('rol',Rol::orderBy('nombre','asc')->get())
         ->with('recurso',Recurso::orderBy('nombre','asc')->get())
         ->with('Atribucion',Atribucion::orderBy('nombre','asc')->get());
    }
    
    public function edit($id){

     $privilegio=$this->editpriv($id);
     $recursos=$this->recurso();

        return view('recursos.privilegio.edit')
        ->with('recursos',$recursos)
         ->with('privilegio',$privilegio)
         ->with('rol',Rol::findOrFail($id));
         //->with('recurso',Recurso::orderBy('nombre','DESC')->get());
         
    }

    public function update(Request $request,$id ){

    	 $this->grabar($request);   
       $this->historial('Privilegio',3); 
    	
    	return Redirect::to('privilegio');

    }

    public function destroy($id){

        $deleted = DB::delete('delete from privilegio where idrol=?',[$id]);
        $this->historial('Privilegio',4);
    	
    	return Redirect::to('privilegio');
    }

    private function privilegios(){

      $privilegio=[];
      $i=0;
      $rol=Rol::all();
      foreach ($rol as $key => $value) {  

       $privilegio[$i]['id']=$value->id;
       $privilegio[$i]['rol']=$value->nombre;
       $privilegio[$i]['admin']=[];
       $ide=$value->id;    

       $contenido= DB::select('select distinct recurso.nombre as Recurso from privilegio,rol,recurso 
        where privilegio.idrol=rol.id 
        and privilegio.idrecurso=recurso.id
        and idrol = ?', [$value->id]);

       $j=0;

       foreach ($contenido as $key => $value) {

         $privilegio[$i]['admin'][$j]['recurso']=$value->Recurso;

        $detalle= DB::select('select atribucion.nombre as Atribucion from privilegio,rol,recurso,atribucion 
        where privilegio.idrol=rol.id 
        and privilegio.idrecurso=recurso.id
        and privilegio.idatribucion=atribucion.id
        and idrol = ? and recurso.nombre = ?', [$ide,$value->Recurso]);

       $d=0;
        foreach ($detalle as $key => $value) {
         $privilegio[$i]['admin'][$j]['atribucion'][$d]=$value->Atribucion;
         $d++;
        }
        
        $j++;

       }
       
       $i++;

      }

      return $privilegio;

    }

    private function editpriv($idrol){

      $privilegio=[];

      $privilegio= DB::select('select id,nombre from recurso ');
     // dd($privilegio);
      $id=0;
      $i=0;
      foreach ($privilegio as $key => $value) {

      $id=$value->id;  
      $i=$key;
      $privilegio[$i]->leer=false;
      $privilegio[$i]->crear=false;
      $privilegio[$i]->editar=false;
      $privilegio[$i]->borrar=false;

      $detalle= DB::select('select atribucion.id as Atribucion from privilegio,rol,recurso,atribucion 
        where privilegio.idrol=rol.id 
        and privilegio.idrecurso=recurso.id
        and privilegio.idatribucion=atribucion.id
        and idrol = ? and recurso.id=?', [$idrol,$id]);

      foreach ($detalle as $key => $value) {

        switch ($value->Atribucion) {
          case 1:
            $privilegio[$i]->leer=true;
            break;
          case 2:
            $privilegio[$i]->crear=true;
            break;
          case 3:
            $privilegio[$i]->editar=true;
            break;
          case 4:
            $privilegio[$i]->borrar=true;
            break;
          
        }
        
      }
    
      }
      //dd($privilegio);
      

      return $privilegio;

    }

    private function grabar($request){

      $idrol=$request->get('idrol');

         $deleted = DB::delete('delete from privilegio where idrol=?',[$idrol]);

        $leer=$request->get('leer');
        $crear=$request->get('crear');
        $editar=$request->get('editar');
        $eliminar=$request->get('eliminar');
        $recursos;
      
       if($leer!=null){ 
       foreach ($leer as $key => $value) {
           $recursos[$key][]=1;
       }
       }

       if($crear!=null){ 
       foreach ($crear as $key => $value) {
           $recursos[$key][]=2;
       }
       }

       if($editar!=null){ 
       foreach ($editar as $key => $value) {
           $recursos[$key][]=3;
       }
       }

       if($eliminar!=null){ 
       foreach ($eliminar as $key => $value) {
           $recursos[$key][]=4;
       }
       }
        
       
       
       $idrecurso;
       foreach ($recursos as $key => $arreglo) {

        $idrecurso=$key; 

        foreach ($arreglo as $key => $value) {

          $privilegio=new Privilegio;
          $privilegio->idrol=$idrol;
          $privilegio->idrecurso=$idrecurso;
          $privilegio->idatribucion=$value;
          $privilegio->save();
        }
          
       } 

    }



}
