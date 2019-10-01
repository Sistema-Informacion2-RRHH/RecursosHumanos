<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use Illuminate\Support\Facades\Redirect;

class HorarioController extends Controller
{
    public function __construct(){
     $this->middleware('auth');
    }

    public function index(){

    	$horario=Horario::orderBy('id','ASC')->paginate(10);
     
       return view ('recursos.horario.index')->with('horario',$horario);

    } 

    public function create(){
    	return view ('recursos.horario.create');
    }

    public function store(Request $request){
    	$horario=new Horario;
  
        $horario->diaSemana=$request->get('diaSemana');
        $horario->HoraEntradaM=$request->get('HoraEntradaM');
        $horario->HoraSalidaM=$request->get('HoraSalidaM');
        $horario->HoraEntradaT=$request->get('HoraEntradaT');
        $horario->HoraSalidaT=$request->get('HoraSalidaT');
        $horario->HoraSabadoE=$request->get('HoraSabadoE');
        $horario->HoraSabadoS=$request->get('HoraSabadoS');
    	$horario->save();
    	
    	return Redirect::to('horario');
    }
    
    
    public function show($id){
    	
        return view('recursos.horario.show')->with('horario',Horario::findOrFail($id));
    }
    
    public function edit($id){
    	
        return view('recursos.horario.edit')
        ->with('horario',Horario::findOrFail($id));
    }

    public function update(Request $request,$id ){

    	$horario=Horario::findOrFail($id);

        $horario->diaSemana=$request->get('diaSemana');
        $horario->HoraEntradaM=$request->get('HoraEntradaM');
        $horario->HoraSalidaM=$request->get('HoraSalidaM');
        $horario->HoraEntradaT=$request->get('HoraEntradaT');
        $horario->HoraSalidaT=$request->get('HoraSalidaT');
        $horario->HoraSabadoE=$request->get('HoraSabadoE');
        $horario->HoraSabadoS=$request->get('HoraSabadoS');
    	$horario->update();
    	
    	return Redirect::to('horario');

    }

    public function destroy($id){

        $horario=Horario::findOrFail($id);
    	$horario->delete();
    	
    	return Redirect::to('horario');
    }
}
