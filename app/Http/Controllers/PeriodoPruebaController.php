<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PeriodoPrueba;
use Illuminate\Support\Facades\Redirect;
use App\Entrevista;


class PeriodoPruebaController extends Controller
{
    public function __construct(){
        $this->mIddleware('auth');
    }

    public function index(){

    	$periodoprueba=PeriodoPrueba::orderBy('IdPrueba','ASC')->paginate(10);
        $recursos=$this->recurso();
    //$this->historial('Periodo_Prueba',1);
     
       return view ('recursos.periodoprueba.index')
       ->with('recursos',$recursos)
       ->with('periodoprueba',$periodoprueba);

    }

    public function create(){
        $recursos=$this->recurso();
    
    	return view ('recursos.periodoprueba.create')
        ->with('recursos',$recursos)
         ->with('entrevista',Entrevista::orderBy('Id','DESC')->get());
        
    }

    public function store(Request $request){
        //$this->historial('Periodo_Prueba',2);
    	$periodoprueba=new PeriodoPrueba;

    	if(PeriodoPrueba::all()->count()>0)
        $periodoprueba->IdPrueba= (PeriodoPrueba::all()->max('IdPrueba'))+1;
		else
		$periodoprueba->IdPrueba= 1;

        $periodoprueba->IdEntrevista=$request->get('IdEntrevista');
        $periodoprueba->FechaInicio=$request->get('FechaInicio');
        $periodoprueba->FechaFin=$request->get('FechaFin');
        $periodoprueba->Hora=$request->get('Hora');
        
    	$periodoprueba->save();
    	
    	
    	return Redirect::to('periodoprueba');
    }
    
    
    public function show($IdEntrevista){
    	
        return view('recursos.periodoprueba.show')->with('periodoprueba',PeriodoPrueba::findOrFail($IdPrueba));
    }
    
    public function edit($IdPrueba){
        $recursos=$this->recurso();
    
    	
        return view('recursos.periodoprueba.edit')
        ->with('recursos',$recursos)
         ->with('periodoprueba',PeriodoPrueba::findOrFail($IdPrueba))
         ->with('entrevista',Entrevista::orderBy('Id','DESC')->get());
    }

    public function update(Request $request,$IdPrueba ){
        //$this->historial('Periodo_Prueba',3);

    	$periodoprueba=PeriodoPrueba::findOrFail($IdPrueba);

    	$periodoprueba->IdEntrevista=$request->get('IdEntrevista');
        $periodoprueba->FechaInicio=$request->get('FechaInicio');
        $periodoprueba->FechaFin=$request->get('FechaFin');
        $periodoprueba->Hora=$request->get('Hora');
    
    	$periodoprueba->update();
    	
    	return Redirect::to('periodoprueba');

    }

    public function destroy($IdPrueba){
        //$this->historial('Periodo_Prueba',4);

        $periodoprueba=PeriodoPrueba::findOrFail($IdPrueba);
    	$periodoprueba->delete();
    	
    	return Redirect::to('periodoprueba');
    }
}
