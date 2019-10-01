<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turno;
use Illuminate\Support\Facades\Redirect;
use App\Horario;

class TurnoController extends Controller
{
    
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){

    	$turno=Turno::orderBy('id','ASC')->paginate(10);
     
       return view ('recursos.turno.index')->with('turno',$turno);

    } 

    public function create(){
    	return view ('recursos.turno.create')
         ->with('horario',Horario::orderBy('diaSemana','DESC')->get());
    }

    public function store(Request $request){
    	$turno=new Turno;
    	$turno->tipo_turno=$request->get('tipo_turno');
        $turno->IdHorario=$request->get('IdHorario');
    	$turno->save();
    	
    	return Redirect::to('turno');
    }
    
    
    public function show($id){
    	
        return view('recursos.turno.show')->with('turno',Turno::findOrFail($id));
    }
    
    public function edit($id){
    	
        return view('recursos.turno.edit')
        ->with('turno',Turno::findOrFail($id))
        ->with('horario',Horario::orderBy('diaSemana','DESC')->get());
    }

    public function update(Request $request,$id ){

    	$turno=Turno::findOrFail($id);

    	$turno->tipo_turno=$request->get('tipo_turno');
        $turno->IdHorario=$request->get('IdHorario');
    	$turno->update();
    	
    	return Redirect::to('turno');

    }

    public function destroy($id){

        $turno=Turno::findOrFail($id);
    	$turno->delete();
    	
    	return Redirect::to('turno');
    }

}
