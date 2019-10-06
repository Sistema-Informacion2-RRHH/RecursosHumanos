<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capacitacion;
use Illuminate\Support\Facades\Redirect;
use App\Empleado;

class CapacitacionController extends Controller
{
     public function __construct(){

     $this->middleware('auth');
     
    }

    public function index(){
        $recursos=$this->recurso();

    	$capacitacion=Capacitacion::orderBy('Codigo','ASC')->paginate(10);
     
       return view ('recursos.capacitacion.index')->with('recursos',$recursos)->with('capacitacion',$capacitacion);

    } 

    public function create(){
        $recursos=$this->recurso();
    	return view ('recursos.capacitacion.create')->with('recursos',$recursos)-> with('empleados',Empleado::orderBy('id','Nombre','Desc')->get());
    }

    public function store(Request $request){
    	$capacitacion=new Capacitacion;
    	$capacitacion->Codigo=$request->get('Codigo');
    
    	$capacitacion->FechaInicio=$request->get('FechaInicio');
    	$capacitacion->FechaFin=$request->get('FechaFin');
    	   $capacitacion->Descripcion=$request->get('Descripcion');

           $capacitacion->IdEmpleado=$request->get('IdEmpleado');
           $capacitacion->TipoCapacitacion=$request->get('TipoCapacitacion');
        $capacitacion->save();

    	//return DD();
    	return Redirect::to('capacitacion');
    }
    
    
    public function show($Codigo){
    	
        return view('recursos.capacitacion.show')->with('capacitacion',Capacitacion::findOrFail($Codigo));
    }
    
    public function edit($Codigo){
        $recursos=$this->recurso();
    	
        return view('recursos.capacitacion.edit')
        ->with('recursos',$recursos)
        ->with('capacitacion',Capacitacion::findOrFail($Codigo))
        ->with('empleados',Empleado::orderBy('id','Nombre','Desc')->get());
    }

    public function update(Request $request,$Codigo ){

    	$capacitacion=Capacitacion::findOrFail($Codigo);

    	$capacitacion->Descripcion=$request->get('Descripcion');
    	$capacitacion->FechaInicio=$request->get('FechaInicio');
    	$capacitacion->FechaFin=$request->get('FechaFin');

           $capacitacion->IdEmpleado=$request->get('IdEmpleado');
           $capacitacion->TipoCapacitacion=$request->get('TipoCapacitacion');
    	$capacitacion->update();
    	
    	return Redirect::to('capacitacion');

    }

    public function destroy($Codigo){

        $capacitacion=Capacitacion::findOrFail($Codigo);
    	$capacitacion->delete();
    	
    	return Redirect::to('capacitacion');
    }
}
