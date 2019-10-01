<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformacionPrivada;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\InformacionPrivadaRequest;

class InformacionPrivadaController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        $recursos=$this->recurso();
    $this->historial('Informacion_Privada',1);

    	$informacionprivada=InformacionPrivada::orderBy('id','ASC')->paginate(10);
     
    return view ('recursos.informacionprivada.index')
    ->with('recursos',$recursos)
    ->with('informacionprivada',$informacionprivada);

    } 

    public function create(){
        $recursos=$this->recurso();
    

    	return view ('recursos.informacionprivada.create')
        ->with('recursos',$recursos);
    }

    public function store(InformacionPrivadaRequest $request){

    	$informacionprivada=new InformacionPrivada;
    	$informacionprivada->Nacionalidad=$request->get('Nacionalidad');
        $informacionprivada->EstadoCivil=$request->get('EstadoCivil');
		$informacionprivada->NroHijos=$request->get('NroHijos');
        $informacionprivada->Ciudad=$request->get('Ciudad');
        $informacionprivada->FechaNacimiento=$request->get('FechaNacimiento');
        $informacionprivada->NroCuentaBancaria=$request->get('NroCuentaBancaria');
        $informacionprivada->NombreContactoEmergencia=$request->get('NombreContactoEmergencia');
        $informacionprivada->NroContactoEmergencia=$request->get('NroContactoEmergencia');
        $informacionprivada->Pasaporte=$request->get('Pasaporte');
    	$informacionprivada->save();
        $this->historial('Informacion_Privada',2);
    	
    	return Redirect::to('informacionprivada');
    }
    
    
    public function show($id){
    	
        return view('recursos.informacionprivada.show')->with('informacionprivada',InformacionPrivada::findOrFail($id));
    }
    
    public function edit($id){
        $recursos=$this->recurso();
  

       return view('recursos.informacionprivada.edit')
       ->with('recursos',$recursos)
       ->with('informacionprivada',InformacionPrivada::findOrFail($id));
		
    }

    public function update(InformacionPrivadaRequest $request,$id ){

    	$informacionprivada=InformacionPrivada::findOrFail($id);

    	$informacionprivada->Nacionalidad=$request->get('Nacionalidad');
        $informacionprivada->EstadoCivil=$request->get('EstadoCivil');
        $informacionprivada->NroHijos=$request->get('NroHijos');
        $informacionprivada->Ciudad=$request->get('Ciudad');
        $informacionprivada->FechaNacimiento=$request->get('FechaNacimiento');
        $informacionprivada->NroCuentaBancaria=$request->get('NroCuentaBancaria');
        $informacionprivada->NombreContactoEmergencia=$request->get('NombreContactoEmergencia');
        $informacionprivada->NroContactoEmergencia=$request->get('NroContactoEmergencia');
        $informacionprivada->Pasaporte=$request->get('Pasaporte');
    	$informacionprivada->update();
          $this->historial('Informacion_Privada',3);
    	
    	return Redirect::to('informacionprivada');

    }

    public function destroy($id){

        $informacionprivada=InformacionPrivada::findOrFail($id);
    	$informacionprivada->delete();
          $this->historial('Informacion_Privada',4);
    	
    	return Redirect::to('informacionprivada');
    }
}
