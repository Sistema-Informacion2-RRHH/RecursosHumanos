<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seleccion;
use Illuminate\Support\Facades\Redirect;
use App\PostReclut;


class SeleccionController extends Controller
{
    public function __construct(){
      $this->mIddleware('auth');
    }

    public function index(){
        $recursos=$this->recurso();
    $this->historial('Seleccion',1);

    	$seleccion=Seleccion::orderBy('Id','ASC')->paginate(10);
     
       return view ('recursos.seleccion.index')
       ->with('recursos',$recursos)
       ->with('seleccion',$seleccion);

    } 

    public function create(){
        $recursos=$this->recurso();
    
    	return view ('recursos.seleccion.create')
        ->with('recursos',$recursos)
         ->with('postreclut',PostReclut::orderBy('Id','DESC')->get());
    }

    public function store(Request $request){ 
    	$seleccion=new Seleccion;
        $seleccion->Recomendacion=$request->get('Recomendacion');
        $seleccion->Puntuacion=$request->get('Puntuacion');

        $id=$request->get('id');
        $reg=PostReclut::findOrFail($id);

        $seleccion->IdReclutamiento=$reg->IdReclutamiento;
        $seleccion->IdPostulante=$reg->IdPostulante;      
    	$seleccion->save();
    	$this->historial('Seleccion',2);
    	
    	return Redirect::to('seleccion');
    }
    
    
    public function show($Id){
    	
        return view('recursos.seleccion.show')->with('seleccion',Seleccion::findOrFail($Id));
    }
    
    public function edit($Id){
        $recursos=$this->recurso();
    
    	
        return view('recursos.seleccion.edit')
        ->with('recursos',$recursos)
        ->with('seleccion',Seleccion::findOrFail($Id))
        ->with('postreclut',PostReclut::orderBy('Id','DESC')->get());
    }

    public function update(Request $request,$Id ){

    	$seleccion=Seleccion::findOrFail($Id);

    	$seleccion->Recomendacion=$request->get('Recomendacion');
        $seleccion->Puntuacion=$request->get('Puntuacion');

        $id=$request->get('id');
        $reg=PostReclut::findOrFail($id);

        $seleccion->IdReclutamiento=$reg->IdReclutamiento;
        $seleccion->IdPostulante=$reg->IdPostulante; 
    	$seleccion->update();
        $this->historial('Seleccion',3);
   	
    	return Redirect::to('seleccion');

    }

    public function destroy($Id){

        $seleccion=Seleccion::findOrFail($Id);
    	$seleccion->delete();
        $this->historial('Seleccion',4);
    	
    	return Redirect::to('seleccion');
    }

}
