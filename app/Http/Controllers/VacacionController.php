<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Vacacion;

class VacacionController extends Controller
{
    public function __construct(){
     $this->middleware('auth');
    }

    public function index(){

        $recursos=$this->recurso();

    $this->historial('Vacacion',1);

    	$vacacion=Vacacion::orderBy('Id','ASC')->paginate(10);
     
       return view ('recursos.vacacion.index')
       ->with('vacacion',$vacacion)
       ->with('recursos',$recursos);

    } 

    public function create(){
        $recursos=$this->recurso();

   
    	return view ('recursos.vacacion.create')
        ->with('recursos',$recursos);
    }

    public function store(Request $request){
         $this->historial('Vacacion',2);
    	$vacacion=new Vacacion;
    	$vacacion->FechaInicio=$request->get('FechaInicio');
        $vacacion->FechaFin=$request->get('FechaFin');
    	$vacacion->save();
    	
    	return Redirect::to('vacacion');
    }
    
    
    public function show($id){
    	
        return view('recursos.vacacion.show')->with('vacacion',Vacacion::findOrFail($id));
    }
    
    public function edit($id){
        $recursos=$this->recurso();

    
    	
        return view('recursos.vacacion.edit')
        ->with('vacacion',Vacacion::findOrFail($id))
        ->with('recursos',$recursos);
    }

    public function update(Request $request,$id ){
        $this->historial('Vacacion',3);

    	$vacacion=Vacacion::findOrFail($id);

    	$vacacion->FechaInicio=$request->get('FechaInicio');
        $vacacion->FechaFin=$request->get('FechaFin');
    	$vacacion->update();
    	
    	return Redirect::to('vacacion');

    }

    public function destroy($id){
        $this->historial('Vacacion',4);

        $vacacion=Vacacion::findOrFail($id);
    	$vacacion->delete();
    	
    	return Redirect::to('vacacion');
    }
}
