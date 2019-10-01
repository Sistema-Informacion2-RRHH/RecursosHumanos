<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seguro;
use Illuminate\Support\Facades\Redirect;


class SeguroController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        $recursos=$this->recurso();
    $this->historial('Seguro',1);

    	$seguro=Seguro::orderBy('Codigo','ASC')->paginate(10);
     
       return view ('recursos.seguro.index')
       ->with('recursos',$recursos)
       ->with('seguro',$seguro);

    } 

    public function create(){
        $recursos=$this->recurso();
    
    	return view ('recursos.seguro.create')
        ->with('recursos',$recursos);
        
    }

    public function store(Request $request){
    	$seguro=new Seguro;
    	$seguro->Codigo=$request->get('Codigo');
        $seguro->NombreAseguradora=$request->get('NombreAseguradora');
        $seguro->Telefono=$request->get('Telefono');
        $seguro->Descripcion=$request->get('Descripcion'); 
    
    	$seguro->save();
        $this->historial('Seguro',2);
    	
    	return Redirect::to('seguro');
    }
    
    
    public function show($Codigo){
    	
        return view('recursos.seguro.show')->with('seguro',Seguro::findOrFail($id));
    }
    
    public function edit($Codigo){
        $recursos=$this->recurso();
    
    	
        return view('recursos.seguro.edit')
        ->with('recursos',$recursos)
        ->with('seguro',Seguro::findOrFail($Codigo));
       
    }

    public function update(Request $request,$Codigo ){

    	$seguro=Seguro::findOrFail($Codigo);

    	$seguro->NombreAseguradora=$request->get('NombreAseguradora');
        $seguro->Telefono=$request->get('Telefono');
        $seguro->Descripcion=$request->get('Descripcion');
    	$seguro->update();
        $this->historial('Seguro',3);
    	
    	return Redirect::to('seguro');

    }

    public function destroy($Codigo){

        $seguro=Seguro::findOrFail($Codigo);
    	$seguro->delete();
        $this->historial('Seguro',4);
    	
    	return Redirect::to('seguro');
    }
}
