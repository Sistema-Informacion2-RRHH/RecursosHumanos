<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reclutamiento;
use Illuminate\Support\Facades\Redirect;
use App\JefeDepartamento;

class ReclutamientoController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){

    	$reclutamiento=Reclutamiento::orderBy('Id','ASC')->paginate(10);
        $recursos=$this->recurso();
    $this->historial('Reclutamiento',1);
     
       return view ('recursos.reclutamiento.index')->with('reclutamiento',$reclutamiento)
       ->with('recursos',$recursos);

    }

    public function create(){
        $recursos=$this->recurso();
    
    	return view ('recursos.reclutamiento.create')
         ->with('jefedepartamento',JefeDepartamento::orderBy('Codigo','DESC')->get())
         ->with('recursos',$recursos);
        
    }

    public function store(Request $request){

        $this->historial('Reclutamiento',2);
    	$reclutamiento=new Reclutamiento;

        $reclutamiento->NombrePuesto=$request->get('NombrePuesto');
        $reclutamiento->DescripcionPuesto=$request->get('DescripcionPuesto');
        $reclutamiento->LugarTrabajo=$request->get('LugarTrabajo');
        $reclutamiento->FechaInicioPublic=$request->get('FechaInicioPublic');
        $reclutamiento->FechaFinPublic=$request->get('FechaFinPublic');
        $reclutamiento->HoraInicioPublic=$request->get('HoraInicioPublic');
        $reclutamiento->HoraFinPublic=$request->get('HoraFinPublic');
        $reclutamiento->NroEmpleadosEsperados=$request->get('NroEmpleadosEsperados');
        $reclutamiento->TipoPostulante=$request->get('TipoPostulante');
        $reclutamiento->CodigoJefeDpto=$request->get('CodigoJefeDpto');
    	$reclutamiento->save();
    	
    	
    	return Redirect::to('reclutamiento');
    }
    
    
    public function show($id){
    	
        return view('recursos.reclutamiento.show')->with('reclutamiento',Reclutamiento::findOrFail($id));
    }
    
    public function edit($id){
        $recursos=$this->recurso();
    
    	
        return view('recursos.reclutamiento.edit')
        ->with('reclutamiento',Reclutamiento::findOrFail($id))
        ->with('recursos',$recursos)
        ->with('jefedepartamento',JefeDepartamento::orderBy('Codigo','DESC')->get());
    }

    public function update(Request $request,$id ){
        $this->historial('Reclutamiento',3);

    	$reclutamiento=Reclutamiento::findOrFail($id);

    	$reclutamiento->NombrePuesto=$request->get('NombrePuesto');
        $reclutamiento->DescripcionPuesto=$request->get('DescripcionPuesto');
        $reclutamiento->LugarTrabajo=$request->get('LugarTrabajo');
        $reclutamiento->FechaInicioPublic=$request->get('FechaInicioPublic');
        $reclutamiento->FechaFinPublic=$request->get('FechaFinPublic');
        $reclutamiento->HoraInicioPublic=$request->get('HoraInicioPublic');
        $reclutamiento->HoraFinPublic=$request->get('HoraFinPublic');
        $reclutamiento->NroEmpleadosEsperados=$request->get('NroEmpleadosEsperados');
        $reclutamiento->TipoPostulante=$request->get('TipoPostulante');
        $reclutamiento->CodigoJefeDpto=$request->get('CodigoJefeDpto');
    
    	$reclutamiento->update();
    	
    	return Redirect::to('reclutamiento');

    }

    public function destroy($id){
        $this->historial('Reclutamiento',4);

        $reclutamiento=Reclutamiento::findOrFail($id);
    	$reclutamiento->delete();
    	
    	return Redirect::to('reclutamiento');
    }
}
