<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;
use Illuminate\Support\Facades\Redirect;


class CargoController extends Controller
{
    public function __construct(){
     $this->middleware('auth');
    }

    public function index(){

    	$cargo=Cargo::orderBy('Id','ASC')->paginate(10);
        $recursos=$this->recurso();
    $this->historial('Cargo',1);
     
       return view ('recursos.cargo.index')
       ->with('recursos',$recursos)
       ->with('cargo',$cargo);

    } 

    public function create(){
        $recursos=$this->recurso();
    
    	return view ('recursos.cargo.create')->with('recursos',$recursos);
    }

    public function store(Request $request){
        $this->historial('Cargo',2);
    	$cargo=new Cargo;
    	$cargo->Nombre=$request->get('Nombre');
        $cargo->Descripcion=$request->get('Descripcion');
    	$cargo->save();
    	
    	return Redirect::to('cargo');
    }
    
    
    public function show($id){
    	
        return view('recursos.cargo.show')->with('cargo',Cargo::findOrFail($id));
    }
    
    public function edit($id){
        $recursos=$this->recurso();
    
    	
        return view('recursos.cargo.edit')
        ->with('recursos',$recursos)
        ->with('cargo',Cargo::findOrFail($id));
    }

    public function update(Request $request,$id ){
        $this->historial('Cargo',3);

    	$cargo=Cargo::findOrFail($id);

    	$cargo->Nombre=$request->get('Nombre');
        $cargo->Descripcion=$request->get('Descripcion');
    	$cargo->update();
    	
    	return Redirect::to('cargo');

    }

    public function destroy($id){
        $this->historial('Cargo',4);

        $cargo=Cargo::findOrFail($id);
    	$cargo->delete();
    	
    	return Redirect::to('cargo');
    }
}
