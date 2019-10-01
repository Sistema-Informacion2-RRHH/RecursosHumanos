<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrato;
use Illuminate\Support\Facades\Redirect;
use App\Beneficio;
use App\Empleado;

class ContratoController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
          $recursos=$this->recurso();

    	$contrato=Contrato::orderBy('Codigo','ASC')->paginate(10);
     
       return view ('recursos.contrato.index') ->with('recursos',$recursos)->with('contrato',$contrato);

    } 

    public function create(){
         $recursos=$this->recurso();
    	return view ('recursos.contrato.create')
         ->with('recursos',$recursos)
        ->with('beneficio',Beneficio::orderBy('Descripcion','DESC')->get())
        ->with('empleado',Empleado::orderBy('Nombre','DESC')->get());
    }

    public function store(Request $request){
    	$contrato=new Contrato;
    	$contrato->Codigo=$request->get('Codigo');
    	$contrato->FechaInicio=$request->get('FechaInicio');
        $contrato->FechaFin=$request->get('FechaFin');
        $contrato->Tipo=$request->get('Tipo');
        $contrato->idBeneficio=$request->get('idBeneficio');
        $contrato->idEmpleado=$request->get('idEmpleado');
    	$contrato->save();
    	
    	return Redirect::to('contrato');
    }
    
    
    public function show($Codigo){
    	
        return view('recursos.contrato.show')->with('contrato',Contrato::findOrFail($Codigo));
    }
    
    public function edit($Codigo){
    	$recursos=$this->recurso();
        return view('recursos.contrato.edit') 
        ->with('recursos',$recursos)
        ->with('contrato',Contrato::findOrFail($Codigo))
        ->with('beneficio',Beneficio::orderBy('Descripcion','DESC')->get())
        ->with('empleado',Empleado::orderBy('Nombre','DESC')->get());
    }

    public function update(Request $request,$Codigo ){

    	$contrato=Contrato::findOrFail($Codigo);
    	$contrato->FechaInicio=$request->get('FechaInicio');
        $contrato->FechaFin=$request->get('FechaFin');
        $contrato->Tipo=$request->get('Tipo');
        $contrato->idBeneficio=$request->get('idBeneficio');
        $contrato->idEmpleado=$request->get('idEmpleado');
    	$contrato->update();
    	
    	return Redirect::to('contrato');

    }

    public function destroy($Codigo){

        $contrato=Contrato::findOrFail($Codigo);
    	$contrato->delete();
    	
    	return Redirect::to('contrato');
    }
}