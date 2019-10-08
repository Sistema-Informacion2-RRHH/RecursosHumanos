<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrevista;
use Illuminate\Support\Facades\Redirect;
use App\JefeDepartamento;
use App\Seleccion;

class EntrevistaController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        $recursos=$this->recurso();
    $this->historial('Entrevista',1);

    	$Entrevista=Entrevista::orderBy('Id','ASC')->paginate(10);
     
       return view ('recursos.entrevista.index')
       ->with('recursos',$recursos)
       ->with('entrevista',$Entrevista);

    } 

    public function create(){
        $recursos=$this->recurso();
    
    	return view ('recursos.entrevista.create')
        ->with('recursos',$recursos)
         ->with('jefedpto',JefeDepartamento::orderBy('Codigo','DESC')->get())
         ->with('seleccion',Seleccion::orderBy('Id','DESC')->get());
    }

    public function store(Request $request){
    	$entrevista=new Entrevista;
    	$entrevista->FechaInicio=$request->get('FechaInicio');
        $entrevista->FechaFin=$request->get('FechaFin');
        $entrevista->HoraInicio=$request->get('HoraInicio');
        $entrevista->HoraFin=$request->get('HoraFin');
        $entrevista->SalarioEsperado=$request->get('SalarioEsperado');
        $entrevista->SalarioPropuesto=$request->get('SalarioPropuesto');
        $entrevista->DisponibilidadTiempo=$request->get('DisponibilidadTiempo');
        $entrevista->CodigoJefeDpto=$request->get('CodigoJefeDpto');
        $entrevista->IdSeleccion=$request->get('IdSeleccion');
    	$entrevista->save();
        //$this->historial('Entrevista',2);
    	
    	return Redirect::to('entrevista');
    }
    
    
    public function show($Id){
    	
        return view('recursos.entrevista.show')->with('entrevista',Entrevista::findOrFail($Id));
    }
    
    public function edit($Id){
        $recursos=$this->recurso();
    
    	
        return view('recursos.entrevista.edit')
        ->with('recursos',$recursos)
        ->with('entrevista',Entrevista::findOrFail($Id))
         ->with('jefedpto',JefeDepartamento::orderBy('Codigo','DESC')->get())
         ->with('seleccion',Seleccion::orderBy('Id','DESC')->get());
    }

    public function update(Request $request,$Id ){

    	$entrevista=Entrevista::findOrFail($Id);
    	$entrevista->FechaInicio=$request->get('FechaInicio');
        $entrevista->FechaFin=$request->get('FechaFin');
        $entrevista->HoraInicio=$request->get('HoraInicio');
        $entrevista->HoraFin=$request->get('HoraFin');
        $entrevista->SalarioEsperado=$request->get('SalarioEsperado');
        $entrevista->SalarioPropuesto=$request->get('SalarioPropuesto');
        $entrevista->DisponibilidadTiempo=$request->get('DisponibilidadTiempo');
        $entrevista->CodigoJefeDpto=$request->get('CodigoJefeDpto');
        $entrevista->IdSeleccion=$request->get('IdSeleccion');
        $entrevista->update();
        $this->historial('Entrevista',3);
    	
    	return Redirect::to('entrevista');

    }

    public function destroy($Id){

        $entrevista=Entrevista::findOrFail($Id);
    	$entrevista->delete();
        $this->historial('Entrevista',4);
    	
    	return Redirect::to('entrevista');
    } 
}
