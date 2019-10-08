<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use Illuminate\Support\Facades\Redirect;


class DepartamentoController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        $recursos=$this->recurso();
    $this->historial('Departamento',1);

    	$departamento=Departamento::orderBy('Codigo','ASC')->paginate(10);
     
       return view ('recursos.departamento.index')
       ->with('recursos',$recursos)
       ->with('departamento',$departamento);

    } 

    public function create(){
        $recursos=$this->recurso();
    
    	return view ('recursos.departamento.create')
        ->with('recursos',$recursos);
    }

    public function store(Request $request){
    	$departamento=new Departamento;
    	$departamento->Nombre=$request->get('Nombre');
        $departamento->NroEmpleado=$request->get('NroEmpleado');
    	$departamento->save();
        $this->historial('Departamento',2);
    	
    	return Redirect::to('departamento');
    }
    
    
    public function show($Codigo){
    	
        return view('recursos.departamento.show')->with('departamento',Departamento::findOrFail($Codigo));
    }
    
    public function edit($Codigo){
        $recursos=$this->recurso();
    
    	
        return view('recursos.departamento.edit')
        ->with('recursos',$recursos)
        ->with('departamento',Departamento::findOrFail($Codigo));
        
    }

    public function update(Request $request,$Codigo ){

    	$departamento=Departamento::findOrFail($Codigo);

    	$departamento->Nombre=$request->get('Nombre');
        $departamento->NroEmpleado=$request->get('NroEmpleado');
    	$departamento->update();
        $this->historial('Departamento',3);
    	
    	return Redirect::to('departamento');

    }

    public function destroy($Codigo){

        $departamento=Departamento::findOrFail($Codigo);
    	$departamento->delete();
        $this->historial('Departamento',4);
    	
    	return Redirect::to('departamento');
    }
}
