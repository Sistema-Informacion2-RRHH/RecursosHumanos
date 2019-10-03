<?php

namespace App\Http\Controllers;

use App\Contrato;
use App\Evaluacion;
use App\PeriodoPrueba;

use App\PlanillaEvaluacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class PlanillaEvaluacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $recursos = $this->recurso();
        //$this->historial('PlanillaEvaluacion',1);

        $planillaevaluacion = PlanillaEvaluacion::orderBy('CodigoEvaluacion', 'ASC')->paginate(10);
        
        return view('recursos.planillaevaluacion.index')->with('recursos', $recursos)
        ->with('planillaevaluacion', $planillaevaluacion);

    }

    public function create(){
        $recursos=$this->recurso();
        return view ('recursos.planillaevaluacion.create')
        ->with('recursos',$recursos)
        ->with('evaluacion',Evaluacion::orderBy('Codigo','DESC')->get())
        ->with('contrato',Contrato::orderBy('Codigo','DESC')->get())
        ->with('periodoprueba',PeriodoPrueba::orderBy('IdPrueba','DESC')->get());
    }

    public function store(Request $request){
    	$planillaevaluacion=new PlanillaEvaluacion;
    	$planillaevaluacion->IdEntrevista=$request->get('IdEntrevista');
    	$planillaevaluacion->IdPrueba=$request->get('IdPrueba');
    	$planillaevaluacion->CodigoEvaluacion=$request->get('CodigoEvaluacion');
    	$planillaevaluacion->FormacionAcademica=$request->get('FormacionAcademica');
    	$planillaevaluacion->ExperienciaPuesto=$request->get('ExperienciaPuesto');
    	$planillaevaluacion->ExperienciaProfesional=$request->get('ExperienciaProfesional');
    	$planillaevaluacion->Actitud=$request->get('Actitud');
    	$planillaevaluacion->CapacidadAnalisis=$request->get('CapacidadAnalisis');
    	$planillaevaluacion->Competitividad=$request->get('Competitividad');
    	$planillaevaluacion->PuntuacionTotal=$request->get('PuntuacionTotal');
    	$planillaevaluacion->save();
    	
    	return Redirect::to('planillaevaluacion');
    }
    
    
    public function show($CodigoEvaluacion){
    	
        return view('recursos.planillaevaluacion.show')
        ->with('planillaevaluacion',PlanillaEvaluacion::findOrFail($CodigoEvaluacion));
    }
    
    public function edit($CodigoEvaluacion){
        $recursos=$this->recurso();
        return view('recursos.planillaevaluacion.edit')->with('recursos',$recursos)
        ->with('planillaevaluacion',PlanillaEvaluacion::findOrFail($CodigoEvaluacion))
        ->with('evaluacion',Evaluacion::orderBy('Codigo','DESC')->get())
        ->with('contrato',Contrato::orderBy('Codigo','DESC')->get())
        ->with('periodoprueba',PeriodoPrueba::orderBy('IdPrueba','DESC')->get());
    }

    public function update(Request $request,$CodigoEvaluacion ){

        $planillaevaluacion=PlanillaEvaluacion::findOrFail($CodigoEvaluacion);
        
    	$planillaevaluacion->IdEntrevista=$request->get('IdEntrevista');
    	$planillaevaluacion->IdPrueba=$request->get('IdPrueba');
    	$planillaevaluacion->CodigoEvaluacion=$request->get('CodigoEvaluacion');
    	$planillaevaluacion->FormacionAcademica=$request->get('FormacionAcademica');
    	$planillaevaluacion->ExperienciaPuesto=$request->get('ExperienciaPuesto');
    	$planillaevaluacion->ExperienciaProfesional=$request->get('ExperienciaProfesional');
    	$planillaevaluacion->Actitud=$request->get('Actitud');
    	$planillaevaluacion->CapacidadAnalisis=$request->get('CapacidadAnalisis');
    	$planillaevaluacion->Competitividad=$request->get('Competitividad');
    	$planillaevaluacion->PuntuacionTotal=$request->get('PuntuacionTotal');
    	$planillaevaluacion->update();
    	
    	return Redirect::to('planillaevaluacion');

    }

    public function destroy($CodigoEvaluacion){

        $planillaevaluacion=PlanillaEvaluacion::findOrFail($CodigoEvaluacion);
    	$planillaevaluacion->delete();
    	
    	return Redirect::to('planillaevaluacion');
    }
}
