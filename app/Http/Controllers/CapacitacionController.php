<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capacitacion;
use Illuminate\Support\Facades\Redirect;

class CapacitacionController extends Controller
{
     public function __construct(){

     $this->middleware('auth');
     
    }

    public function index(){

    	$capacitacion=Capacitacion::orderBy('Codigo','ASC')->paginate(10);
     
       return view ('recursos.capacitacion.index')->with('capacitacion',$capacitacion);

    } 

    public function create(){
    	return view ('recursos.capacitacion.create');
    }

    public function store(Request $request){
    	$capacitacion=new Capacitacion;
    	$capacitacion->Codigo=$request->get('Codigo');
    	$capacitacion->Descripcion=$request->get('Descripcion');
    	$capacitacion->FechaInicio=$request->get('FechaInicio');
    	$capacitacion->FechaFin=$request->get('FechaFin');
    	$capacitacion->save();
    	
    	return Redirect::to('capacitacion');
    }
    
    
    public function show($Codigo){
    	
        return view('recursos.capacitacion.show')->with('capacitacion',Capacitacion::findOrFail($Codigo));
    }
    
    public function edit($Codigo){
    	
        return view('recursos.capacitacion.edit')
        ->with('capacitacion',Capacitacion::findOrFail($Codigo));
    }

    public function update(Request $request,$Codigo ){

    	$capacitacion=Capacitacion::findOrFail($Codigo);

    	$capacitacion->Descripcion=$request->get('Descripcion');
    	$capacitacion->FechaInicio=$request->get('FechaInicio');
    	$capacitacion->FechaFin=$request->get('FechaFin');
    	$capacitacion->update();
    	
    	return Redirect::to('capacitacion');

    }

    public function destroy($Codigo){

        $capacitacion=Capacitacion::findOrFail($Codigo);
    	$capacitacion->delete();
    	
    	return Redirect::to('capacitacion');
    }
}
